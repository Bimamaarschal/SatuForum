<!-- PHP - Fungsi -->

<?php
require_once __DIR__ . '../../lib/DataSource.php';
$database = new DataSource();
$sql = "SELECT * FROM forumcepat ORDER BY id DESC";
$result = $database->select($sql);
?>


<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:halaman_admin.php");
    } else if ($data['level'] == "pegawai") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("location:halaman_pegawai.php");
    } else if ($data['level'] == "pengurus") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pengurus";
        header("location:halaman_pengurus.php");

    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
?>


