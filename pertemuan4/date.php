<?php

// Belajar Dari video tutorial Bareng Pak Sandhika Galih
// Date
// untuk menampilkan tanggal dengan format tertentu
	// echo date("l, d-m-Y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah sejak 1 januari 1970
// echo time();
// echo date("d-M-Y", time()+60+60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));
// strotime
echo strotime("l", strotime("25 aug 1985 ));
	
?>