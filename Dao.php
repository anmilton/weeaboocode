<?php
require_once 'KLogger.php';

class Dao {
  private $host = "us-cdbr-iron-east-03.cleardb.net";
  private $db = "heroku_c9b2db8997b6ba5";
  private $user = "b1ad34ea92f519";
  private $pass = "738cdbf5";

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

  public function getAnimes () {
    $conn = $this->getConnection();
    $getQuery = "select *  from animes limit 3";
    $q = $conn->prepare($getQuery);
    $q->execute();
    $results = $q->setFetchMode(PDO::FETCH_ASSOC);
    $results = $q->fetchAll();
    if(empty($results))
	{
		    $this->logger->LogInfo("No animes");
		    return null;
	}
    return $results;
  }

  public function getAlphaAnimes ($letter) {
    $conn = $this->getConnection();
    $getQuery = "select *  from animes where title like '$letter%'";
    $q = $conn->prepare($getQuery);
    $q->execute();
    $results = $q->setFetchMode(PDO::FETCH_ASSOC);
    $results = $q->fetchAll();
    if(empty($results))
	{
		    $this->logger->LogInfo("No animes");
		    return null;
	}
    return $results;
  }

  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("select comment, date_created  from comment order by date_created desc", PDO::FETCH_ASSOC);
  }

  public function getUser ($username) {
    $conn = $this->getConnection();
    $getQuery = "select *  from users where username = :username";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":username", $username);
    $q->execute();
    $results = $q->setFetchMode(PDO::FETCH_ASSOC);
    $results = $q->fetchAll();
    if(empty($results))
	{
		    $this->logger->LogInfo("No user [{$username}]");
		    return null;
	}
    return $results;
    }

  public function getOneAnime ($title) {
    $conn = $this->getConnection();
    $getQuery = "select *  from animes where title = :title";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":title", $title);
    $q->execute();
    $results = $q->setFetchMode(PDO::FETCH_ASSOC);
    $results = $q->fetchAll();
    if(empty($results))
	{
		    $this->logger->LogInfo("No anime [{$title}]");
		    return null;
	}
    return $results;
    }

  public function createUser ($username, $password, $email) {
    $this->logger->LogInfo("Saving a user [{$username}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into users (username, password, email) values (:username, :password, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    $q->bindParam(":email", $email);
    $q->execute();
  }

  public function createAnime ($title, $tvrating, $genre, $description) {
    $this->logger->LogInfo("Saving an anime [{$title}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into animes (title, tvrating, genre, description) values (:title, :tvrating, :genre, :description)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":title", $title);
    $q->bindParam(":tvrating", $tvrating);
    $q->bindParam(":genre", $genre);
    $q->bindParam(":description", $description);
    $q->execute();
  }

  public function saveComment ($comment) {
    $this->logger->LogInfo("Saving a comment [{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (comment, userid) values (:comment, :userid)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->bindParam(":userid", $userid);
    $q->execute();
  }
}