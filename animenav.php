<?php
	require_once "Dao.php";
	$dao = new Dao();
	session_start();
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scroll.js"></script>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
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
		<div class="subheaders" id="a">A</div>
		<div>		
		<?php
				$letter = "A";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="b">B</div>
		<div>		
		<?php
				$letter = "B";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="c">C</div>
		<div>		
		<?php
				$letter = "C";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="d">D</div>
		<div>		
		<?php
				$letter = "D";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="e">E</div>
		<div>		
		<?php
				$letter = "E";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="f">F</div>
		<div>		
		<?php
				$letter = "F";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="g">G</div>
		<div>		
		<?php
				$letter = "G";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="h">H</div>
		<div>		
		<?php
				$letter = "H";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="i">I</div>
		<div>		
		<?php
				$letter = "I";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="j">J</div>
		<div>		
		<?php
				$letter = "J";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="k">K</div>
		<div>		
		<?php
				$letter = "K";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="l">L</div>
		<div>		
		<?php
				$letter = "L";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="m">M</div>
		<div>		
		<?php
				$letter = "M";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="n">N</div>
		<div>		
		<?php
				$letter = "N";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="o">O</div>
		<div>		
		<?php
				$letter = "O";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="p">P</div>
		<div>		
		<?php
				$letter = "P";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="q">Q</div>
		<div>		
		<?php
				$letter = "Q";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="r">R</div>
		<div>		
		<?php
				$letter = "R";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="s">S</div>
		<div>		
		<?php
				$letter = "S";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="t">T</div>
		<div>		
		<?php
				$letter = "t";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="u">U</div>
		<div>		
		<?php
				$letter = "U";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="v">V</div>
		<div>		
		<?php
				$letter = "V";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="w">W</div>
		<div>		
		<?php
				$letter = "W";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="x">X</div>
		<div>		
		<?php
				$letter = "X";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="y">Y</div>
		<div>		
		<?php
				$letter = "Y";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>
		<div class="subheaders" id="z">Z</div>
		<div>		
		<?php
				$letter = "Z";
				$animetitles = $dao->getAlphaAnimes ($letter);
				foreach($animetitles as $animetitle) 
				{
					echo "<a class='animetitle' href='animetemp.php?title=".urlencode($animetitle['title'])."'>" . htmlspecialchars($animetitle['title']). "</a>";
				}
		?>
		</div>


		<div class="footer">
			Weeaboo Trash Reviews &copy;2019 Ashlee Milton
		</div>
	</body>
</html>