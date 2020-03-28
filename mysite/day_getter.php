<!DOCTYPE html>
<html>
<head>
	<title>My PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$day = date("w");		
		$days_of_week = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday','Saturday');

		if ($day == 3) {
			echo "<p>It is ".$days_of_week[$day]." my dudes.</p>";

		}
		else{
			echo "<p>It is ".$days_of_week[$day].". </p>";
		}

	?>

</body>
</html>