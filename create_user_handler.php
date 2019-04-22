<?php
session_start();
  require_once "Dao.php";
  $dao = new Dao();
//echo "<pre>" .print_r($_SESSION,1) ."</pre>";
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$userExist = $dao->getUser ($username);
$valid = true;
$messages = array();
if (empty($username)) {
  $messages[] = "Please enter a username";
  $valid = false;
}
if ($userExist[0]['username'] == $username) {
  $messages[] = "Username is taken";
  $valid = false;
}
if (empty($password1)) {
  $messages[] = "Please enter a password";
  $valid = false;
}
if (empty($password2)) {
  $messages[] = "Please re-enter a password";
  $valid = false;
}
if ($password1 != $password2) {
  $messages[] = "Passwords dont match";
  $valid = false;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $messages[] = "Not valid email";
  $valid = false;
}
if (!$valid) {
  $_SESSION['good'] = false;
  $_SESSION['messages'] = $messages;
  $_SESSION['form_input'] = $_POST;
  header("Location: signup.php");
  exit();
}

require_once 'Dao.php';
$dao = new Dao();
$dao->createUser ($username, $password1, $email);
$messages[] = "Welcome to the heap!";
$_SESSION['good'] = true;
$_SESSION['messages'] = $messages;
//echo "CONGRATS YOU CREATE A USER";
header("Location: signup.php");
exit;
?>