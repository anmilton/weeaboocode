<?php
	require_once "Dao.php";
	$dao = new Dao();
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="icon" href="favicon.ico">
		</head>
	<header><title>Anime</title></header>
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
		<div class="alphablock">
			<ul class="alphablock">
				<li class="alphalist"><a href="#a">A</a></li>
				<li class="alphalist"><a href="#b">B</a></li>
				<li class="alphalist"><a href="#c">C</a></li>
				<li class="alphalist"><a href="#d">D</a></li>
				<li class="alphalist"><a href="#e">E</a></li>
				<li class="alphalist"><a href="#f">F</a></li>
				<li class="alphalist"><a href="#g">G</a></li>
				<li class="alphalist"><a href="#h">H</a></li>
				<li class="alphalist"><a href="#i">I</a></li>
				<li class="alphalist"><a href="#j">J</a></li>
				<li class="alphalist"><a href="#k">K</a></li>
				<li class="alphalist"><a href="#l">L</a></li>
				<li class="alphalist"><a href="#m">M</a></li>
				<li class="alphalist"><a href="#n">N</a></li>
				<li class="alphalist"><a href="#o">O</a></li>
				<li class="alphalist"><a href="#p">P</a></li>
				<li class="alphalist"><a href="#q">Q</a></li>
				<li class="alphalist"><a href="#r">R</a></li>
				<li class="alphalist"><a href="#s">S</a></li>
				<li class="alphalist"><a href="#t">T</a></li>
				<li class="alphalist"><a href="#u">U</a></li>
				<li class="alphalist"><a href="#v">V</a></li>
				<li class="alphalist"><a href="#w">W</a></li>
				<li class="alphalist"><a href="#x">X</a></li>
				<li class="alphalist"><a href="#y">Y</a></li>
				<li class="alphalist"><a href="#z">Z</a></li>
			</ul>
		</div>
		<div class="headers"> Anime </div>
		<div class="subheaders"><a name="a">A</a></div>
		<div>		
		<?php
				$letter = "A";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="b">B</a></div>
		<div>		
		<?php
				$letter = "B";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="c">C</a></div>
		<div>		
		<?php
				$letter = "C";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="d">D</a></div>
		<div>		
		<?php
				$letter = "D";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="e">E</a></div>
		<div>		
		<?php
				$letter = "E";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="f">F</a></div>
		<div>		
		<?php
				$letter = "F";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="g">G</a></div>
		<div>		
		<?php
				$letter = "G";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="h">H</a></div>
		<div>		
		<?php
				$letter = "H";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="i">I</a></div>
		<div>		
		<?php
				$letter = "I";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="j">J</a></div>
		<div>		
		<?php
				$letter = "J";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="k">K</a></div>
		<div>		
		<?php
				$letter = "K";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="l">L</a></div>
		<div>		
		<?php
				$letter = "L";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="m">M</a></div>
		<div>		
		<?php
				$letter = "M";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="n">N</a></div>
		<div>		
		<?php
				$letter = "N";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="o">O</a></div>
		<div>		
		<?php
				$letter = "O";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="p">P</a></div>
		<div>		
		<?php
				$letter = "P";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="q">Q</a></div>
		<div>		
		<?php
				$letter = "Q";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="r">R</a></div>
		<div>		
		<?php
				$letter = "R";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="s">S</a></div>
		<div>		
		<?php
				$letter = "S";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="t">T</a></div>
		<div>		
		<?php
				$letter = "t";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="u">U</a></div>
		<div>		
		<?php
				$letter = "U";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="v">V</a></div>
		<div>		
		<?php
				$letter = "V";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="w">W</a></div>
		<div>		
		<?php
				$letter = "W";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="x">X</a></div>
		<div>		
		<?php
				$letter = "X";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="y">Y</a></div>
		<div>		
		<?php
				$letter = "Y";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders"><a name="z">Z</a></div>
		<div>		
		<?php
				$letter = "Z";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a href='animetemp.php'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>