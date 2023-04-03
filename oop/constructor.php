<?php 



class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
        // echo "Hello";
    {(

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

    }
    public function getLabel() {

        return "$this->judul, $this->penulis, $this->penerbit, $this->harga" ;
    }

}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Gramedia", 300000);
$produk2 = new Produk("Mobile Legend", "Coki Pardede", "Suka Maju Media", 500000);
$produk3 = new Produk("Doraemon", "Muslim", "Trans Media");
$produk4 = new Produk();


echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
?>