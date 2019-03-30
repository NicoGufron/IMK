<?php 
session_start();


if(isset($_POST['save'])){
	include 'connect.php';

	$dir = '/images';
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileDes = "$dir$fileName";

	//move_uploaded_file($fileTmpName, $fileDes);
	echo getcwd();
	

	$conn->query("INSERT INTO kategori (nama_kategori, foto_kategori) VALUES ('$_POST[nama]','$fileName')");
	echo "<script> alert('Data Tersimpan'); </script>";
	echo "<script> location='admin_kategori.php'; </script>";
}
?>