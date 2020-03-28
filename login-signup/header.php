<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="meta description">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title>My Login System</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<header>
			<nav>
				<ul>
					<li><a class= "navigation-elem" href="http://127.0.0.1/mysite/">Home</a></li>
					<li><a class= "navigation-elem" href="signup.php">Sign up!</a></li>
					<li><a class= "navigation-elem" href="#">About Me</a></li>
					<li style="float:right"><a href="?logout=true" type="submit" name="submit">Logout</a></li>
				</ul>
				<div>
					<?php
						if (!isset($_SESSION['username'])){
							echo '<form action="includes/login.inc.php" method="post">
							   	  <input type="text" name="email" placeholder="Username">
								  <input type="password" name="password" placeholder="Password">
								  <button class=".btn" type="submit" name="submit">Login</button>	
								  </form> <a href="signup.php">No account? Sign up!</a>';
						
						}else{
							echo '<form action="includes/logout.inc.php" method="post">
								  <button class=".btn" type="submit" name="logout">Logout</button>
								  </form>';
						}
					?>
				</div>
			</nav>
		</header>
	
	</body>
</html>