<?php 

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function getLabel() {

        return "$this->judul, $this->penulis" ;
    }

}


$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Hirohito";

$produk2 = new produk();
$produk2->judul = "Teletubbies";
$produk2->penulis = "saida";


echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();



// var_dump($produk1);
// var_dump($produk2);


?>