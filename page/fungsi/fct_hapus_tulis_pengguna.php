<!-- Awal gagal -->
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:masuk.php?pesan=ditolak");
}
?>
<!-- Akhir Gagal -->

<!-- Awal Ambil Data -->
<?php
$con = mysqli_connect("localhost", "root", "", "satuforum");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
$idsession = mysqli_query($con, "SELECT * FROM pengguna WHERE email='$_SESSION[email]'");
$datas = mysqli_fetch_array($idsession);
$ID = "ID"
    ?>
<!-- Akhir Ambil Data -->

<!-- Awal Hapus ID -->
<?php
$id1 = $_GET['id12'];

$result = mysqli_query($con, "DELETE FROM tulispengguna WHERE idtulis='$id1' ");

echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = '../tulis_pengguna/tulis_pengguna.php';
        </script>
            ";
?>
<!-- Akhir Hapus ID -->
