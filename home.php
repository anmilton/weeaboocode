<?php
	require_once "Dao.php";
	$dao = new Dao();
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
		<link rel="icon" type="icon" href="favicon.ico">
	</head>

	<header><title>Home</title></header>
	<body>
		<div class="banner">
			<img class="logo" src="weeblogo.png" alt="logo"/>
			<h1> Weeaboo Trash Reviews </h1>
		</div>
		<div class="menublock">
			<ul class="menu">
      			<li class="menu">
				<div class="dropdown">
  					<button class="active">Home</button>
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
			Fresh Off The Heap
		</div>
		<div class="animeblock">
			<?php
				$animetitles = $dao->getAnimes ();
				foreach($animetitles as $animetitle) 
				{
					echo "<span class='animeeach'> <a href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a> </span>";
				}
			?>
		</div>

		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>