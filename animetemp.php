<?php
  session_start();
  require_once "Dao.php";
  $dao = new Dao();
  $anime = $dao->getOneAnime ($_GET['title']);

//if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
 // $_SESSION['message'] = "Please log in.";
  //header("Location: login.php");
  //exit();
//}
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
				<div>
					<?php echo htmlspecialchars($anime[0]['tvrating']) ?>
				</div>
					
				<div class="subheaders">
					<label for="genre">Genre:</label>
				</div>
				<div>
					<?php echo htmlspecialchars($anime[0]['genre']) ?>
				</div>
					
				<div class="subheaders">
					<label for="discription">Description:</label>
				</div>
				<div>
					<?php echo htmlspecialchars($anime[0]['description']) ?>
				</div>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>