<?php
  session_start();
  require_once "Dao.php";
  $dao = new Dao();
  $user = $dao->getUser ($_POST['username']);
  $pass = $user[0]['password'];
 
  if ($pass != $_POST['password']) {
    $_SESSION['message'] = "Error, couldn't login!";
    header("Location: login.php");
    exit();
  } else {
    $_SESSION['logged_in'] = true;
    $_SESSION['message'] = "Welcome back to the heap!";
    header("Location: login.php");
  }
?>