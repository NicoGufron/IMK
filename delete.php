<?php
require_once("connect.php");

$id = $_GET["id"];

mysqli_query($conn, "DELETE from barang where id = '$id'") or die(mysqli_error($conn));

header("location: menu.php");
?>