<?php
session_start();
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM data_users WHERE username = '$username' AND password = '$password'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);

if(!isset($data['nama'])){
    ?>
    <script>
        alert('Username atau Password Salah!');
        window.open("login.php", "_self");
    </script>
    <?php
} else {
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['user_role'] = $data['user_role'];
    ?>
    <script>
        window.open("index.php", "_self");
    </script>
    <?php
}

?>