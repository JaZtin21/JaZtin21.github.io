<?php
include("../database.php");

$requests = $_POST['requestedBook'];



if (isset($_POST['AcceptRequests'])) {
    //Accept button clicked!
    foreach ($requests as $bookid) {
        $query = "UPDATE book_requests SET status = 'confirmed' WHERE book_id = ?";
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
        $query = "UPDATE book_requests SET status = 'declined' WHERE book_id = ?";
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
