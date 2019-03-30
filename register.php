<?php
require_once("connect.php");

if($_POST){
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$nmrk = $_POST['nokartu'];
	$nmrtelp = $_POST['notelp'];
	echo "alert('Nama = '$nama')";
	$q = "SELECT * FROM users WHERE nama = '$nama'";
	$query = mysqli_query($conn,$q) or die (mysqli_error($conn));
	$num = mysqli_num_rows($query);
	echo "alert('Jumlah = $num')";
	if($num > 0){
		$_SESSION = $_POST["nama"];
		echo '<script> 
			alert("Akun sudah pernah dibuat!")
		</script>';
		header("Location: icon.html");
	}
	else{
		echo "<script> alert ('Akun berhasil dibuat') </script>";
		$add = "INSERT into users(nama, email, nokartu,notelp) values('$nama','$email','$nmrk','$nmrtelp')";
		$query1 = mysqli_query($conn,$add) or die (mysqli_error($conn));
		header("location: index.php");
	}
}
?>