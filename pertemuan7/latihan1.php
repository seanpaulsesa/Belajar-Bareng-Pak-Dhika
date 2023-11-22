<?php
// variabel Scope / lingkup variabel
// $x = 10;

// function tampilX() {
// 	global $x;
// 	echo $x;
// }

// tampilX();

// super global milik php
// merupakan array associative
// echo $_SERVER["SERVER_NAME"]; 


// $_GET
// $_GET["nama"] = "Paulus Sesa";
// $_GET["nrp"] = "20180511074013";
// var_dump($_GET);

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
	"email" => "pacekodingl7700@gmail.com", 
	"jurusan" => "Information System", 
	"gambar" => "paulus.jpg"
	]

];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) :?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a> 
	</li>
<?php endforeach; ?> 
</ul>

</body>
</html>