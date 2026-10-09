<?php

class Produk {

    //property
    public string $kode;
    public string $namma;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100;//11
$jumlahpajak = $produk->harga * Produk ::PAJAK; //TAMBAHAN1,1JUTA

//TOTAL
$total = $produk->harga + $jumlahpajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "harga: ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak:". $pajak;
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak: Rp.". $total;