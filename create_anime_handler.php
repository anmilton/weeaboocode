<?php
session_start();
//echo "<pre>" .print_r($_SESSION,1) ."</pre>";
//echo "<pre>" .print_r($_POST,1) ."</pre>";
$title = $_POST['title'];
$tvrating = $_POST['tvrating'];
$genre = $_POST['genre'];
$description = $_POST['description'];
$valid = true;
$messages = array();
if (empty($title)) {
  $messages[] = "Please enter a title";
  $_SESSION['good'] = false;
  $valid = false;
}
if (empty($tvrating)) {
  $messages[] = "Please enter a TV rating";
  $valid = false;
}
if (empty($genre)) {
  $messages[] = "Please enter a genre";
  $valid = false;
}
if (empty($description)) {
  $messages[] = "Please enter a description";
  $valid = false;
}
if (!$valid) {
    $_SESSION['messages'] = $messages;
    $_SESSION['form_input'] = $_POST;
    $_SESSION['good'] = false;
    header("Location: animeadd.php");
    exit();
}

require_once 'Dao.php';
$dao = new Dao();
$dao->createAnime ($title, $tvrating, $genre, $description);
$messages[] = "Thanks for Adding!";
$_SESSION['messages'] = $messages;
$_SESSION['good'] = true;
//echo "CONGRATS YOU CREATE AN ANIME";
header("Location: animeadd.php");
exit;
?>