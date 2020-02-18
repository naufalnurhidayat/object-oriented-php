<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Spongebob", "Stephent", "Nickladeon", "25000", 100);
// $produk2 = new Game("Age Of Empires 2", "Microsoft", "Microsoft Coorporation", "2500000",50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );

// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser;
echo "<br>";
new ProdukUser;

 ?>