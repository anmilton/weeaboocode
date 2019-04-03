<?php
session_start();
//echo "<pre>" .print_r($_SESSION,1) ."</pre>";
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
			Join us in the Bin
		</div>
		<form method="post" action="create_user_handler.php" enctype="multipart/form-data>
			<div class="signup">
				<div class="signup">
					<label for:"username">Username:</label>
				</div>
 					<input class="signuptext" value="<?php echo isset($_SESSION['form_input']['username']) ? $_SESSION['form_input']['username'] : ''; ?>" type="text" name="username" id="username" placeholder="Join us...">
				<div class="signup">
					<label for="password1">Password:</label>
				</div>
					<input class="signuptext" type="password" name="password1" id="password1" placeholder="We have pocky...">
				<div class="signup">
					<label for="password2">Re-enter Password:</label>
				</div>
					<input class="signuptext" type="password" name="password2" id="password2" placeholder="and  plushies...">
				<div class="signup">
					<label for="e-mail">E-mail:</label>
				</div>
				<div>
					<input class="signuptext" type="text" name="email" id="email" placeholder="Not really, join anyways...">
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
					<input type="submit" value="Create User">
				</div>
			</div>
		</form>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>