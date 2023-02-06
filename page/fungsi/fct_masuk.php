<!-- PHP - Fungsi -->

<!-- Awal Koneksi -->
<?php
$con = mysqli_connect("localhost", "root", "", "satuforum");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<!-- Akhir Koneksi -->

<!-- Awal Masuk Pengguna -->
<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$datalg = "SELECT * FROM pengguna WHERE email='$email' and password='$password'";
$login = mysqli_query($con, $datalg);
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "admin") {
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin";
        header("location:admin.php");

    } else if ($data['level'] == "pengguna") {
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "pengguna";
        header("location:../tulis_pengguna/tulis_pengguna.php");

    } else if ($data['level'] == "tamu") {
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "tamu";
        header("location:tulis_tamu.php");

    } else {
        header("location:masuk.php?pesan=gagal");
    }
} else {
    header("location:masuk.php?pesan=gagal");
}
?>
<!-- Akhir Masuk Pengguna -->