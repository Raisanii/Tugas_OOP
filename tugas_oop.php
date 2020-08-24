<?php 

//Restaurant Korea
//- Makanan
//- Minuman

//class
class Daftar_menu {
	
	public $nama_menu = "nama menu", 
		   $harga = 0;
		   

	//method
	public function getLabel(){
		return "$this->nama_menu, $this->harga";
	}

}

//object
$produk1 = new Daftar_menu();
$produk1->nama_menu = "Jjangmyeon";
$produk1->harga = 50000;

$produk2 = new Daftar_menu();
$produk2->nama_menu = "Sikhye";
$produk2->harga = 25000;
	echo "Makanan & Minuman Korea <br>";
	echo "Makanan : " . $produk1->getLabel();
	echo "<br>";
	echo "Minuman : " . $produk2->getLabel();


 ?>