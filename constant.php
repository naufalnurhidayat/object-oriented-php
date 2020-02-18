<?php 

// define('NAMA', 'Naufal Nur Hidayat');

// echo NAMA;

// const UMUR = 16;

// echo "<br>";

// echo UMUR;

// class Coba {
// 	const NAMA = "Naufal Nur Hidayat";
// }

// echo Coba::NAMA;

class Coba {
	public const KELAS = __CLASS__;
}

$kelas = new Coba();
echo Coba::KELAS;


 ?>