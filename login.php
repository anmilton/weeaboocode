<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
	</head>
	<header><title>Login</title></header>
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
  					<button class="active"><?php
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
			Return to the Heap
		</div>
		<form method="post" action="handler.php">
			<div class="login">
      			<span><label for="password">Username:</label> <input type="text" id="username" name="username" value="<?php echo isset($_SESSION['form_input']['username']) ? $_SESSION['form_input']['username'] : ''; ?>">
			</span>
      			<span><label for="username">Password:</label> <input type="password" id="password" name="password">
			</span>
			</div>
     			<?php
     				 if (isset($_SESSION['message'])) {
					$sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "valid" : "invalid";
        			 echo "<div id='message' class='" . $sentiment . "'>" . $_SESSION['message'] . "</div>";
						}
					   unset($_SESSION['message']);
					   unset($_SESSION['good']);
					   unset($_SESSION['form_input']);
      			?>
			<div class="submitbut">
				<input type="submit" value="Login">
			</div>
		</form>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>