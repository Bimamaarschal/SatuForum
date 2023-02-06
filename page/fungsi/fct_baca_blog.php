<!-- Awal Ambil Data -->
<?php
$con = mysqli_connect("localhost", "root", "", "satuforum");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<!-- Akhir Ambil Data -->

<!-- Awal Ambil ID -->
<?php

$id1 = $_GET['id10'];

$datalihat = mysqli_query($con, "SELECT * FROM tulispengguna WHERE idtulis='$id1' ");

while ($dataslihat = mysqli_fetch_array($datalihat)) {
    $idtulis_edit = $dataslihat['idtulis'];
    $tanggal_edit = $dataslihat['tanggal'];
    $judul_edit = $dataslihat['judul'];
    $isi_edit = $dataslihat['isi'];
    $isi2_edit = $dataslihat['isi2'];
    $pengguna_edit = $dataslihat['pengguna'];
}
?>
<!-- Akhir Ambil ID -->