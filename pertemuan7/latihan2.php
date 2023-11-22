<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nrp"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
		
	</ul>

	<a href="latihan1.php">Kembali ke daftar mahasiswa</a>

</body>
</html>