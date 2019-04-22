<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  $_SESSION['message'] = "Please log in.";
  header("Location: login.php");
  exit();
}
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
	</head>
	<header><title>Add To The Heap</title></header>
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
			Add Anime Title
		</div>
		<form id="anime" method="post" action="create_anime_handler.php" enctype="multipart/form-data>
			<div class="signup">
				<div class="signup">
					<label for:"title">Title:</label>
				</div>
 					<input class="signuptext" type="text" name="title" id="title" value="<?php echo isset($_SESSION['form_input']['title']) ? $_SESSION['form_input']['title'] : ''; ?>">
				<div class="signup">
					<label for="tvrating">TVRating:</label>
				</div>
					<input class="signuptext" type="text" name="tvrating" id="tvrating" value="<?php echo isset($_SESSION['form_input']['tvrating']) ? $_SESSION['form_input']['tvrating'] : ''; ?>">
				<div class="signup">
					<label for="genre">Genre:</label>
				</div>
					<input class="signuptext" type="text" name="genre" id="genre" value="<?php echo isset($_SESSION['form_input']['genre']) ? $_SESSION['form_input']['genre'] : ''; ?>">
				<div class="signup">
					<label for="discription">Description:</label>
				</div>
				<div>
					<textarea form="anime" class="box" name="description" id="description" placeholder="No Spoliers..."><?php echo isset($_SESSION['form_input']['description']) ? $_SESSION['form_input']['description'] : ''; ?></textarea>
				</div>
<?php
      if (isset($_SESSION['messages'])) {
		$sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "valid" : "invalid";
        foreach($_SESSION['messages'] as $message) {
		  echo "<div class='" . $sentiment . "'>{$message}</div>";
        }
      }
      unset($_SESSION['messages']);
			unset($_SESSION['form_input']);
?>
				<div class="submitbut">
					<input type="submit" value="Create Anime">
				</div>
			</div>
		</form>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>