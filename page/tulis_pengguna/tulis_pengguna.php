<!DOCTYPE html>
<html lang="en">

<head>
    <title>Satu Forum</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Mobile App Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Font Satu Forum - Google -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
    <!-- Icon - FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
        integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP"
        crossorigin="anonymous"></script>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../../assets/plugins/jquery-flipster/dist/jquery.flipster.min.css">
    <!-- Satu Forum CSS -->
    <link id="theme-style" rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
    <!-- Awal gagal -->
    <?php
    session_start();
    if ($_SESSION['level'] == "") {
        header("location:../masuk.php?pesan=ditolak");
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



    ?>
    <!-- Akhir Ambil Data -->

    <!-- Awal Header -->
    <header class="header">
        <div class="branding">
            <div class="container position-relative">
                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo"><a class="navbar-brand" href="/"><img style="height: 100px; width: 100px;"
                                class="logo-icon" src="../../assets/images/logo.png" alt="logo"></a></h1>
                </nav>
                <ul class="social-list list-inline mb-0 position-absolute">
                    <li class="list-inline-item"><a class="text-dark" href="#"><i class="fab fa-twitter fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-facebook-f fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-instagram fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Akhir Header -->

    <!-- Awal Index Masuk -->
    <section class="hero-section">
        <div class="container">
            <div class="row figure-holder" style="padding-bottom: 150px;">
                <div class="col-12 col-md-6 pt-3 pt-md-4" style="padding-bottom: 80px;">
                    <a href="../keluar.php"><span class="more-arrow">&larr;</span> Keluar</a>
                    <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Selamat Datang
                        <?= $datas['nama'] ?> <br> Di Forum Blog <br>
                    </h2>
                    <div class="site-tagline mb-3" style="font-size: 12pt;">Anda sudah masuk, sebagai pengguna anda
                        dapat menulis blog bersama, setiap tulisan akan terpatau secara publik</div>

                </div>
                <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                    <h3 class="text-left mb-4">Data Tulisan</h3>
                    <div class="row g-3">
                        <div class="col-6">
                            <a href="tambah_tulis_pengguna.php" class="btn w-100 btn-primary py-2">Tambah
                                Tulisan</a>
                        </div>
                        <div class="col-6">
                        <a href="../blog.php" class="btn w-100 btn-secondary py-2">Lihat
                                Blog</a>
                        </div>

                        <div class="col-12" style="padding-top: 50px;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $datatabel = mysqli_query($con, "SELECT * FROM tulispengguna WHERE pengguna='$datas[nama]'");
                                while ($data_tulis = mysqli_fetch_array($datatabel)) {
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td>" . $data_tulis['idtulis'] . "</td>";
                                    echo "<td>" . $data_tulis['judul'] . "</td>";
                                    echo "<td>" . $data_tulis['tanggal'] . "</td>";
                                    echo "<td><a class='text-dark' href='baca_tulis_pengguna.php?id10=$data_tulis[idtulis]'><i class='fa fa-file'></i></a>&nbsp;<a class='text-dark' href='edit_tulis_pengguna.php?id11=$data_tulis[idtulis]'><i class='fa fa-edit'></i></a>&nbsp;<a class='text-dark' href='../fungsi/fct_hapus_tulis_pengguna.php?id12=$data_tulis[idtulis]'><i class='fa fa-trash'></i></a></td>
        </tr>
        </tbody>
        ";
                                }
                                ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Index Masuk  -->

    <!-- Awal Kata-kata-->
    <section class="cta-section py-5 theme-bg-secondary text-center">
        <div class="container">
            <h3 class="text-white font-weight-bold">"Seorang penulis profesional adalah seorang amatir yang tidak
                berhenti."</h3>
            <h3 class="text-white font-weight-bold mb-3" style="font-size: 12pt;">Richard Bach</h3>

        </div>
    </section>
    <!-- Akhir Kata-kata-->

    <!-- Awal Footer-->
    <footer class="footer theme-bg-primary" style="padding-top: 50px;">
        <div class="footer-bottom text-center pb-5">
            <small class="copyright">Dibuat Oleh : Bima Maarschal &nbsp; | &nbsp; <a
                    href="https://github.com/Bimamaarschal/SatuForum">Code : <i class="fab fa-github fa-fw"
                        style="color: #57B147;"></i>Bimamaarschal</a></small>
        </div>
    </footer>
    <!-- Akhir Footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="../../assets/plugins/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Page Specific JS -->
    <script type="text/javascript" src="../../assets/plugins/jquery-flipster/dist/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="../../assets/js/flipster-custom.js"></script>
</body>

</html>