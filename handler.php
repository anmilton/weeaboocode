<?php
  session_start();
  require_once "Dao.php";
  $dao = new Dao();
  $user = $dao->getUser ($_POST['username']);
  $pass = $user[0]['password'];
  $passpass = hash("sha256", $_POST['password'] . "fKd93Vmz!k*dAv5029Vkf9$3Aa");
  echo $passpass;
 
  if ($pass != $passpass) {
    $_SESSION['message'] = "Error, couldn't login!";
    $_SESSION['good'] = false;
    $_SESSION['form_input'] = $_POST;
    header("Location: login.php");
    exit();
  } else {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $user[0]['username'];
    $_SESSION['message'] = "Welcome back to the heap!";
    $_SESSION['good'] = true;
    header("Location: login.php");
  }
?>