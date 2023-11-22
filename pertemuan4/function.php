<?php
	function salam($waktu ="Datang", $nama = "Admin") {
		return "Selamat Datang $waktu $nama!";
	}	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan Function</title>
</head>
<body>
	<h1><?= salam ("pagi", "sandhika"); ?></h1>
</body>
</html>