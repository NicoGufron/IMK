<?php 

include 'connect.php';

$id_pelanggan = $_GET['id'];
$conn->query("DELETE FROM users WHERE id='$id_pelanggan'");

echo "<script> alert('Pelanggan telah dihapus'); </script>";
echo "<script> location='admin_pelanggan.php'; </script>";
?>