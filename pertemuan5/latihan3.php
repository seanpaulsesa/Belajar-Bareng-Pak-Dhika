<?php 
$mahasiswa = [
	["paulus sesa", "20180511074013", "Sistem Informasi", "pauluspaul7700@gmail.com"],
	["pace koding", "20180511074013", "Sistem Informasi", "pacekoding7700@gmail.com"],
	["solossa", "20180511074013", "Sistem Informasi", "pacekoding7700@gmail.com"],
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
		li {
			background-color: salmon;
		}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach( $mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama : <?= $mhs[0]; ?></li>
		<li>NRP : <?= $mhs[1]; ?></li>
		<li>JURUSAN : <?= $mhs[2]; ?></li>
		<li>EMAIL : <?= $mhs[3]; ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>