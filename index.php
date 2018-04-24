<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Comptaible" content="IE=Edge">
	<title>PHP Loop Activity</title>
</head>
<body>
	<h3>1. Square 6 x 6</h3>
	<?php
	for ($row = 1; $row <= 6; $row++) {
		for($col = 1; $col <= 6; $col++) {
			echo " * ";
		}
		echo "<br>";
	}
	?>
	<hr>
	<h3>2. Right Triangle 6 x 6</h3>
	<?php
	for ($row = 1; $row <= 6; $row ++) {
		for ($col = 1; $col <= $row; $col++) {
			echo ' * ';
		}
		echo '<br>';
	}
	?>
	<hr>
	<h3>3. Inverted Right Triangle 6 x 6</h3>
	<?php
	for ($row = 6; $row >= 1; $row --) {
		for ($col = 1; $col <= $row; $col++) {
			echo ' * ';
		}
		echo '<br>';
	}
	?>
	<hr>
	<h3>4. Tabled Multiplication Table 1 - 10</h3>
	<table border=2;>
		<?php
		for ($x = 1; $x <= 10; $x++) {
			echo "<tr>";
			for ($y = 1; $y <= 10; $y++) {
				echo "<td>" . $x * $y . "</td>";
			}
			echo '</tr>';
		}
		?>
	</table>
	<hr>
	<h3>5. Jedi-Sith-Grey-Grey Jedi</h3>
	<?php
	$forceuser = 20;
	echo "<h4>$forceuser force user. </h4>";
	for ($x = 1; $x <= $forceuser; $x++) {
		echo  "$x" . "&nbsp";
		if ($x % 10 == 0) {
			echo "You're a Grey Jedi";
		}
		else if ($x % 5 == 0) {
			echo "You're a Grey";
		}
		else if ($x % 2 == 0) {
			echo "You're a Jedi";
		}
		else {
			echo "You're a Sith";
		}
		echo '<br>';
	}
	?>
	<hr>
	<h3>6. Asterisk and Zeroes 5x5</h3>
	<?php
	for ($row = 1; $row <= 5; $row++) {
		for ($col = 1; $col <= 5; $col++) {
			if ($row % 2 == 0) {
				#show rows 2, 4 and 6
				if($col % 2 == 0) {
					echo " o ";
				}
				else {
					echo " x ";
				} 
			}
			else {
				#shows 1, 3 and 5
				if ($col % 2 == 0) {
					echo " x ";
				}
				else {
					echo " o ";
				}
			}
		}
		echo "<br>";
	}
		?>
	</body>
	</html>