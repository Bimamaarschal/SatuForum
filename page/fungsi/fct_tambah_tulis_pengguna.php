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

<!-- Awal tambah data -->
<?php
if (isset($_POST['submit'])) {
    $idtulis = $ID . date('dmYhi');
    $tanggal = $_POST['tanggal'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $isi2 = $_POST['isi2'];
    $pengguna = $datas['nama'];
    $result = mysqli_query($con, "INSERT INTO tulispengguna(idtulis, tanggal, judul, isi, isi2, pengguna) VALUES('$idtulis','$tanggal','$judul', '$isi', '$isi2', '$pengguna')");
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../tulis_pengguna/tulis_pengguna.php';
        </script>
            ";
}
?>
<!-- Akhir tambah data -->