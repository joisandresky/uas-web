<?php
$server = "localhost";
$uname = "root";
$pass = "";
$db = "logistra";

$conn = mysqli_connect($server, $uname, $pass, $db);

if(!$conn){
    die("Gagal Koneksi Ke Database!");
}
?>