<?php
class produk{
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
        public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1=new produk();
//$produk1->judul = "Naruto";
//var_dump($produk1);

//echo "<br>";
//echo "<br>";
//$produk2=new produk();
//$produk2->judul = "Uncharted";
//$produk2->tambahProperty = "Hahaha";
//var_dump($produk2);

$produk3=new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
echo "<br>";
$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
