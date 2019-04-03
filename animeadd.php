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
	</head>
	<header><title>Join us</title></header>
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
  					<button class="dropbut">Anime</button>
  					<div class="dropdown-content">
    						<a href="animenav.php">Alphabetical</a>
    						<a href="animeadd.php">Submission</a>
  					</div>
				</div>
      			</li>
      			<li class="menu">
				<div class="dropdown">
  					<button class="dropbut">Login</button>
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
		<form method="post" action="create_anime_handler.php" enctype="multipart/form-data>
			<div class="signup">
				<div class="signup">
					<label for:"title">Title:</label>
				</div>
 					<input class="signuptext" type="text" name="title" id="title">
				<div class="signup">
					<label for="tvrating">TVRating:</label>
				</div>
					<input class="signuptext" type="text" name="tvrating" id="tvrating">
				<div class="signup">
					<label for="genre">Genre:</label>
				</div>
					<input class="signuptext" type="text" name="genre" id="genre">
				<div class="signup">
					<label for="discription">Description:</label>
				</div>
				<div>
					<input class="box" type="textarea" name="description" id="description" placeholder="No Spoliers...">
				</div>
<?php
      if (isset($_SESSION['messages'])) {
        foreach($_SESSION['messages'] as $message) {
          echo "<div>{$message}</div>";
        }
      }
      unset($_SESSION['message']);
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