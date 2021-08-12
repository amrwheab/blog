<?php
  session_start();
  $user = $_SESSION['user'];
  unset( $_SESSION['user'], $user );
  if ($_GET['prev'] === 'index.php') {
    header('location:./');
  } else {
    header('location:'. $_GET['prev']);
  }
?>