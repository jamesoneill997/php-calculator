<!DOCTYPE html>
<html>
<head>
	<title>My PHP</title>
</head>
<body>
	<div id="calculator">
	<h1>CALC</h1>
	<form method="GET">
		<input type="text" name="num-1" placeholder="Number 1">
		<input type="text" name="num-2" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>


		</select>

		<button type = "submit" name="submit" value="submit">Submit!</button>
	</form>
	</div>
	<h1>The answer is: </h1>

	<?php
		if(isset($_GET['submit'])){
			$result1 = $_GET['num-1'];
			$result2 = $_GET['num-2'];
			$operator = $_GET['operator'];
			switch($operator){
				case "None":
					echo "You need to select an operator";
				break;

				case 'Add':
					echo $result1+$result2;
					break;

				case 'Subtract':
					echo $result1-$result2;
					break;

				case 'Divide':
					echo $result1/$result2;
					break;
				case 'Multiply':
					echo $result1*$result2;
					break;

				default:
					"Invalid selection";
				break;
			}





		}
	?>

</body>
</html>