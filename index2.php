<html>
<body>
<h1>Welcome<h1>
<?php
$a = $_GET["x"];
$b = $_GET["y"];

function sum($x, $y) {
	return $x + $y;
}
echo "$a+$b";
echo sum($a, $b);
?>
</body>
<html>
