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

<!-- Awal Ambil ID -->

<?php

$id1 = $_GET['id11'];

$datalihat = mysqli_query($con, "SELECT * FROM tulispengguna WHERE idtulis='$id1' ");
 
while($dataslihat = mysqli_fetch_array($datalihat))
{
    $idtulis_edit = $dataslihat['idtulis'];
    $tanggal_edit = $dataslihat['tanggal'];
    $judul_edit = $dataslihat['judul'];
    $isi_edit = $dataslihat['isi'];
    $isi2_edit = $dataslihat['isi2'];
    $pengguna_edit = $dataslihat['pengguna'];
}
?>

<?php
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $result = mysqli_query($con, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    header("Location: index.php");
}
?>
<!-- Akhir Ambil ID -->



<!-- Awal edit data -->
<?php

if (isset($_POST['submit'])) {
    $idtulis = $idtulis_edit;
    $tanggal = $tanggal_edit;
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $isi2 = $_POST['isi2'];
    $pengguna = $pengguna_edit;

    $result = mysqli_query($con, "UPDATE tulispengguna SET idtulis='$idtulis', tanggal='$tanggal', judul='$judul', isi='$isi', isi2='$isi2', pengguna='$pengguna'  WHERE idtulis='$idtulis'");

    echo "
        <script>
            alert('data berhasil diedit');
            document.location.href = '../tulis_pengguna/tulis_pengguna.php';
        </script>
            ";
}
?>
<!-- Akhir edit data -->