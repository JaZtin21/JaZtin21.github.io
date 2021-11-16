<?php
include('../includes/db.inc.php');
session_start();
$email = '';
$password = '';
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = "SELECT * FROM user.accounts WHERE email = '$email' and password = '$password';";

$sess = mysqli_query($conn, $query);

$current_user = mysqli_fetch_assoc($sess) or die("Error code: User not found!");

mysqli_close($conn);

$_SESSION['firstname'] = $current_user['firstname'];
$_SESSION['lastname'] = $current_user['lastname'];

if ($current_user['type'] == 'admin') {
    header('Location: ../pages/AdminHome.php');
} else if ($current_user['type'] == 'student') {
    header('Location: ../pages/StudentHome.php');
} else {
    die('404: File not Found!');
}

?>

