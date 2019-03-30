<?php 
session_start();
require_once "connect.php";
if($_POST["name"]!="" &&$_POST["password"]!="")
{
	$nama = $_POST["name"];
	$pass = $_POST["password"];
	$query = "SELECT * from users where nama = '$nama' and nokartu = '$pass'";
	$queryadmin = "SELECT * from admins where nama = '$nama' and pass = '$pass'";
	$q = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$qa= mysqli_query($conn, $queryadmin) or die(mysqli_error($conn));
	$row = mysqli_fetch_assoc($q);
	$rowadmin = mysqli_fetch_assoc($qa);
	if($row > 1){
		$_SESSION = $_POST["nama"];
		echo "<script> alert('Selamat datang $nama!')
		window.location.href='index.php'</script>";

	}
	else if($rowadmin > 1){
		$_SESSION = $_POST["nama"];
		echo "<script> alert('Selamat datang admin $nama!')
		window.location.href='admin_kategori.php'</script>";
	}
	else{
		echo "<script>alert('Username dan password salah')
		window.location.href='index.php'</script>";
	}
}
?>