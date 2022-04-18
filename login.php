<?php 
$user = $_POST ["user"];
$pass = $_POST ["pass"];

$usuario = "admin";
$contra = "1234";

if ($usuario == $user and $contra == $pass) {
    header("location:https://www.potrerodigital.org");
} else {
    header ("location:error_404.html");
}
?>