<?php
require_once 'KLogger.php';

class Dao {
  I removed the db info since the repo is public and I didn't want my tables dropped
  Hopfully this is ok!
  private $host = "";
  private $db = "";
  private $user = "";
  private $pass = "";

  protected $logger;

  public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }
  public function getConnection () {
    $this->logger->LogDebug("Getting a connection.");
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
    } catch (Exception $e) {
      $this->logger->LogError(__CLASS__ . "::" . __FUNCTION__ . " The database exploded " . print_r($e,1));
      echo print_r($e,1);
      exit;
    }
    return $conn;
  }

  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("select comment, date_created  from comment order by date_created desc", PDO::FETCH_ASSOC);
  }

  public function getUser ($username) {
    $conn = $this->getConnection();
    return $conn->query("select *  from user where user_name = {$userName}", PDO::FETCH_ASSOC);
  }

  public function createUser ($username, $password, $email) {
    $conn = $this->getConnection();
    $saveQuery = "insert into user (username, password, email) values (:username, :password, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":name", $userName);
    $q->bindParam(":email", $userName);
    $q->bindParam(":password", $password);
    $q->execute();
  }

  public function saveComment ($comment) {
    $this->logger->LogInfo("Saving a comment [{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (comment, user_id) values (:comment, 1)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }
}