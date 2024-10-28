<html>
<head></head>
<body>

<?php

echo "<table border = '1'>";

for($i = 1; $i <= $_POST["size"]; $i++){
	echo "<tr>";
	for($j = 1; $j < $_POST["size"]; $j++){
		echo "<td>" . $i * $j. "</td>";
	}
	echo "</tr>";
}

echo "</table>";
?>
</body>
</html>