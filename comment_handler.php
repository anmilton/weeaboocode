<?php
session_start();
$comment = $_POST['comment'];
$valid = true;

if (250 < strlen($comment)) {
  $messages[] = "Comment is too long, please shorten it.";
  $valid = false;
}
if (0 >= strlen($comment)) {
  $messages[] = "Please enter a comment";
  $valid = false;
}

if (!$valid) {
    $_SESSION['messages'] = $messages;
    $_SESSION['form_input'] = $_POST;
    $_SESSION['title'] = $_POST['title'];
    header("Location: animetemp.php");
    exit();
}
require_once 'Dao.php';
$dao = new Dao();
$dao->saveComment($comment, $_SESSION['username'], $_POST['title']);
$_SESSION['message'] = "Thanks for posting!";
$_SESSION['title'] = $_POST['title'];
header("Location: animetemp.php");
exit;