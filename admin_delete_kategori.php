<?php 
session_start();
include 'connect.php';

$ambil = $conn->query("SELECT * FROM kategori where id_kategori = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotokategori = $pecah['foto_kategori'];

if(file_exists("images/$fotokategori")){
	unlink("images/$fotokategori");
}

$conn->query("DELETE from kategori where id_kategori='$_GET[id]'");

echo "<script> alert('Kategori Terhapus!'); </script>";
echo "<script> location='admin_kategori.php'; </script>";
?>