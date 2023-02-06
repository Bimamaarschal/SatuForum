<!-- Awal Ambil Data -->
<?php
$con = mysqli_connect("localhost", "root", "", "satuforum");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
$idsession = mysqli_query($con, "SELECT * FROM pengguna WHERE email='$_SESSION[email]'");
$datas = mysqli_fetch_array($idsession);
$level_id = "pengguna"
    ?>
<!-- Akhir Ambil Data -->

<!-- Awal tambah data -->
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $level_id;
    $result = mysqli_query($con, "INSERT INTO pengguna( nama, email, password, level) VALUES('$nama','$email','$password', '$level')");
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../masuk.php?pesan=daftarberhasil';
        </script>
            ";
}
?>
<!-- Akhir tambah data -->