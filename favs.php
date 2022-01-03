<?php

include('database.php');


  $method = $_GET['method'];
  $user_id = $_GET['user_id'];
  $book_id = $_GET['book_id'];
  
  if ($method == "Like") {
    mysqli_query($conn,"INSERT INTO bookmarks (user_id, book_id) VALUES ('$user_id', '$book_id')");
  }
  else {
    mysqli_query($conn,"DELETE FROM bookmarks WHERE user_id = '$user_id' AND book_id = '$book_id'");
  }


?>
