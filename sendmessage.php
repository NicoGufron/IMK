<?php
require_once("connect.php");
if($_POST)
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = htmlspecialchars($_POST["message"]);

    $q = "INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message');";
    $my = mysqli_query($conn,$q) or die(mysqli_error($conn));

    echo "<script>alert('Message has been sent!')
    window.location.href='contact.html'</script>";
}

?>