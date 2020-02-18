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

}

$produk1 = new Produk("Spongebob", "Stephent", "Nickladeon", "25000");
$produk2 = new Produk("Age Of Empires 2", "Microsoft", "Microsoft Coorporation", "2500000");

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
 ?>