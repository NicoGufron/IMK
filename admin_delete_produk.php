<?php 
session_start();

include 'connect.php';

$ambil = $conn->query("SELECT * FROM barang where id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['gambar'];

if(file_exists("images/$fotoproduk")){
	unlink("images/$fotoproduk");
}

$conn->query("DELETE from barang where id='$_GET[id]'");

echo "<script> alert('Produk Terhapus!'); </script>";
echo "<script> location='admin_produk.php'; </script>";
?>