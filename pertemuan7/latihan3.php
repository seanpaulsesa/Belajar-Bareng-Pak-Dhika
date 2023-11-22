<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>
	<?php if(isset($_POST["Submit"]) ) : ?>
	<h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

	<form action="" method="post">
		Masukan Nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>