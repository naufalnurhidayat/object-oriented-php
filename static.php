<?php 

// class Coba{

// 	public static $angka = 1;

// 	public static function halo() {
// 		return "Halo " . self::$angka++ . " Kali <br>";

// 	}
// }

// echo Coba::halo();
// echo Coba::halo();
// echo Coba::halo();

class Coba {

	public static $angka = 1;

	public function Halo() {
		return "Halo " . self::$angka++ . " Kali <br>";
	}
}

$obj = new Coba();
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();

echo "<hr>";

$obj2 = new Coba();
echo $obj2->Halo();
echo $obj2->Halo();
echo $obj2->Halo();

 ?>