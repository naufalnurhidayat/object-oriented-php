<?php 

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}



class Komik extends Produk{
	public $jmlHalaman;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoLengkap() {
		$str = "Komik: " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}



class Game extends Produk{
	public $waktuMain;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}
	
	public function getInfoLengkap() {
		$str = "Game: " . parent::getInfoLengkap() . " - {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Spongebob", "Stephent", "Nickladeon", "25000", 100);
$produk2 = new Game("Age Of Empires 2", "Microsoft", "Microsoft Coorporation", "2500000",50);
 
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>