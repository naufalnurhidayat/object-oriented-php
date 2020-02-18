<?php 

class Produk {
	public $judul = "Judul",
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";

	}

}


// $produk1 = new Produk();
// $produk1->judul = "Spongebob";
// $produk1->tambahProperty = "Hahaha";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Age Of Empires 2";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Spongebob Squarpants";
$produk3->penulis = "Stephen";
$produk3->penerbit = "Nickladeon";
$produk3->harga = "20000";

$produk4 = new Produk();
$produk4->judul = "Age Of Empires 2";
$produk4->penulis = "Microsoft";
$produk4->penerbit = "Microsoft Coorporation";
$produk4->harga = "2500000";

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();
 ?>