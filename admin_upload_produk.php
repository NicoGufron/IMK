<?php 
session_start();

if(isset($_POST['save'])){
	include 'connect.php';

	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileDes = 'images/'.$fileName;

	move_uploaded_file($fileTmpName, $fileDes);

	$conn->query("INSERT INTO barang (id, nama, harga, kuantitas, gambar, deskripsi_produk, id_kategori) VALUES (null,'$_POST[nama]','$_POST[harga]','$_POST[kuantitas]','$fileName','$_POST[deskripsi]','$_POST[kategori]')");
	echo "<script> alert('Data Tersimpan'); </script>";
	echo "<script> location='admin_produk.php'; </script>";
}
?>