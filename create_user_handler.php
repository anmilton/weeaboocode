<?php
session_start();
//echo "<pre>" .print_r($_SESSION,1) ."</pre>";
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$valid = true;
$messages = array();
if (empty($username)) {
  $messages[] = "Please enter a username";
  $valid = false;
}
if ($password1 != $password2) {
  $messages[] = "Passwords dont match";
  $valid = false;
}
if (!$valid) {
    $_SESSION['messages'] = $messages;
    $_SESSION['form_input'] = $_POST;
    header("Location: signup.php");
    exit();
}

require_once 'Dao.php';
$dao = new Dao();
$dao->createUser ($username, $password1, $email);
$messages[] = "Welcome to the heap!";
$_SESSION['messages'] = $messages;
//echo "CONGRATS YOU CREATE A USER";
header("Location: signup.php");
exit;
?>