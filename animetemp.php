<?php
  session_start();
  require_once "Dao.php";
  $dao = new Dao();
  if (isset($_GET['title'])) {
	$anime = $dao->getOneAnime ($_GET['title']);
	$title = $_GET['title'];
  }
  else {
	$anime = $dao->getOneAnime ($_SESSION['title']);
	$title = $_SESSION['title'];
  }
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
	</head>
	<header><title><?php echo $title?></title></header>
	<body>
		<div class="banner">
			<img class="logo" src="weeblogo.png" alt="logo"/>
			<h1> Weeaboo Trash Reviews </h1>
		</div>
		<div class="menublock">
			<ul class="menu">
      			<li class="menu">
				<div class="dropdown">
  					<button class="dropbut">Home</button>
  					<div class="dropdown-content">
						<a href="home.php">Home</a>
  					</div>
				</div>
      			</li>
      			<li class="menu">
				<div class="dropdown">
  					<button class="active">Anime</button>
  					<div class="dropdown-content">
    						<a href="animenav.php">Alphabetical</a>
    						<a href="animeadd.php">Submission</a>
  					</div>
				</div>
      			</li>
      			<li class="menu">
				<div class="dropdown">
  					<button class="dropbut"><?php
						if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    						echo 'Login'; }
						else {
						echo 'Logout';} ?>
					</button>
  					<div class="dropdown-content">
						<?php
						if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    						echo '<a href="login.php">' . 'Login' . '</a>';
    						echo '<a href="signup.php">' . 'SignUp' . '</a>';
						}
						elseif(isset($_SESSION['logged_in'])){
    						echo '<a href="logout.php">' . 'Logout' . '</a>';
						}
						?>
  					</div>
				</div>
      			</li>
    			</ul>
		</div>
				<div class="headers">
					<label for:"title"><?php echo htmlspecialchars($anime[0]['title']) ?></label>

				</div>
 					
				<div class="subheaders">
					<label for="tvrating">TVRating:</label>
				</div>
				<div class="animetitle">
					<?php echo htmlspecialchars($anime[0]['tvrating']) ?>
				</div>
					
				<div class="subheaders">
					<label for="genre">Genre:</label>
				</div>
				<div class="animetitle">
					<?php echo htmlspecialchars($anime[0]['genre']) ?>
				</div>
					
				<div class="subheaders">
					<label for="discription">Description:</label>
				</div>
				<div class="animetitle">
					<?php echo "<pre>" . htmlspecialchars($anime[0]['description']) . "</pre>"?>
				</div>
		<div class="headers">Comments</div>
		<form method="post" action="comment_handler.php" id="comment">
		<div class="commenttitle">Comment: <textarea class="box" form="comment" value="<?php echo isset($_SESSION['form_input']['comment']) ? $_SESSION['form_input']['comment'] : ''; ?>"type="text" name="comment"></textarea></div>
		<input type="hidden" name="title" value="<?php echo $anime[0]['title'];?>">
			<?php
			if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    			echo '<div class="invalid"> Please login to comment!</div>'; }
			else {
			echo '<div class="submitbut"><input type="submit" value="Submit"></div>' ;} ?>

		<?php if (isset($_SESSION['message'])) {
			$sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
			echo "<div class='" . $sentiment . "' id='message'>" . $_SESSION['message'] . "</div>";
		}
		unset($_SESSION['message']);
      	unset($_SESSION['form_input']);?>
		</form>

		<?php
			$comments = $dao->getComments($title);
   			echo "<table id='comments'><tr><th>Username</th><th>Comment</th><th>Timestamp</th>";
   			foreach ($comments as $comment) {
     				echo "<tr><td>" . htmlspecialchars($comment['username']) . "</td></td><td>" . htmlspecialchars($comment['comment']) . "</td><td>" . $comment['datecreated'] . "</td></tr>";
   			}
   		echo "</table>";
   		?>

		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>