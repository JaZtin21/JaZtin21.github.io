<?php
include("../database.php");

if (isset($_POST['book_borrowed'])) {
    $request = $_POST['book_borrowed'];
    $query = "UPDATE book_requests SET status = 'borrowed' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $request);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_errno($stmt)){
        header("Location: ../ManageTransactionStatus.php?success=false");
        exit();
    } else{
        header("Location: ../ManageTransactionStatus.php?success=true");
    }
}

if (isset($_POST['book_returned'])) {
    $request = $_POST['book_returned'];
    $query = "UPDATE book_requests SET status = 'returned' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $request);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_errno($stmt)){
        header("Location: ../ManageTransactionStatus.php?success=false");
        exit();
    } else{
        header("Location: ../ManageTransactionStatus.php?success=true");
    }
}

if (isset($_POST['requestsId'])) {
    $requests = $_POST['requestsId'];
}

if (isset($_POST['AcceptRequest'])) {
    $request = $_POST['AcceptRequest'];
    $query = "UPDATE book_requests SET status = 'confirmed' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $request);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_errno($stmt)) {
        header("Location: ../ManageTransactionReq.php?success=false");
        exit();
    } else {
        header("Location: ../ManageTransactionReq.php?success=true");
        exit();
    }
}

if (isset($_POST['RejectRequest'])) {
    $request = $_POST['RejectRequest'];
    $query = "UPDATE book_requests SET status = 'declined' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $request);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_errno($stmt)) {
        header("Location: ../ManageTransactionReq.php?success=false");
        exit();
    } else {
        header("Location: ../ManageTransactionReq.php?success=true");
        exit();
    }
}

if (isset($_POST['AcceptRequests'])) {
    //Accept button clicked!
    foreach ($requests as $bookid) {
        $query = "UPDATE book_requests SET status = 'confirmed' WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $bookid);
        mysqli_stmt_execute($stmt);
    }

    if (mysqli_stmt_errno($stmt)) {
        header("Location: ../ManageTransactionReq.php?success=false");
        exit();
    } else {
        header("Location: ../ManageTransactionReq.php?success=true");
        exit();
    }
}

if (isset($_POST['RejectRequests'])) {
    //Reject button clicked!
    foreach ($requests as $bookid) {
        $query = "UPDATE book_requests SET status = 'declined' WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $bookid);
        mysqli_stmt_execute($stmt);
    }

    if (mysqli_stmt_errno($stmt)) {
        header("Location: ../ManageTransactionReq.php?success=false");
        exit();
    } else {
        header("Location: ../ManageTransactionReq.php?success=true");
        exit();
    }
}
