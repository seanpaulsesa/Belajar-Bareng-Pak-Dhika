<?php
// $mahasiswa = [
// 	["Paulus Sesa", "20180511074013", "pauluspaul7700@gmail.com", "Sistem Informasi"],
// 	["Pace Koding", "20180511074013", "paceKoding7700@gmail.com", "Sistem Informasi"],
// ];


// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
	[
	"nama" => "Paulus Sesa",
	"nrp" => "20180511074013", 
	"email" => "pauluspaul7700@gmail.com", 
	"jurusan" => "Sistem Informasi",
	"gambar" => "paulus.jpg"
	],

	[
	"nama" => "Pace Koding",
	"nrp" => "20180511074013", 
	"email" => "pauluspaul7700@gmail.com", 
	"jurusan" => "Sistem Informasi", 
	"gambar" => "paulus.jpg"
	]

];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Mahasiswa</title>
	<style>
		h1 {
			background-color: salmon;
		}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs): ?>
	<ul>
		<li>
			<img src="img/<?= $mhs["gambar"]; ?>">
		</li>
		<li>Nama : <?= $mhs["nama"]; ?></li>
		<li>Nim  : <?= $mhs["jurusan"]; ?></li>
		<li>Email: <?= $mhs["email"]; ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>



