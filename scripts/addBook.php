<?php
include("../includes/db.inc.php");
$title = '';
$author = '';
$isbn = '';
$publisher = '';
$decription = '';

if (isset($_POST['submit'])) {
    //Form is submitted
    $title = $_POST['book_title'];
    $author = $_POST['book_author'];
    $isbn = $_POST['book_isbn'];
    $publisher = $_POST['book_publisher'];
    $description = $_POST['book_description'];
    $image_url = uploadFile();
}

//Check if book is already existing in the database
$query = "SELECT * FROM books.books_dummy WHERE book_name = ? AND book_author = ?;";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $title, $author);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$books = mysqli_fetch_assoc($result);

if (is_null($books)) {
    //Add/Insert book into the database
    $query = "INSERT INTO books.books_dummy (book_name, book_author, isbn, book_publisher, description, image_url) VALUES(?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $title, $author, $isbn, $publisher, $description, $image_url);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_stmt_errno($stmt)) {
        header('Location: ../pages/ManageBookspageAdd.php?success=false');
        exit();
    } else {
        header('Location: ../pages/ManageBookspageAdd.php?success=true');
        exit();
    }
} else {
    header('Location: ../pages/ManageBookspageAdd.php?success=false&error=bookExists');
    exit();
}

function uploadFile()
{
    $target_dir = "../uploads/images/";
    $target_file = $target_dir . basename($_FILES['image_file']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST['submit'])) {
        $checkFile = getimagesize($_FILES['image_file']['tmp_name']);
        if ($checkFile !== false) {
            echo "File is an image - " . $checkFile['mime'] . '.';
        } else {
            header('Location: ../pages/ManageBookspageAdd.php?success=false&error=notImage');
            exit();
        }
    }

    //Check file type 
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = false;
        header('Location: ../pages/ManageBookspageAdd.php?success=false&error=fileType');
        exit();
    }

    // Check if $uploadOk is set to 0 by an error
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["image_file"]["name"])) . " has been uploaded.";
        //Returns file path
        return $target_file;
    } else {
        header('Location: ../pages/ManageBookspageAdd.php?success=false&error=upload');
        exit();
    }
}
