<!-- PHP - Fungsi -->
<?php
require_once __DIR__ . '../../lib/DataSource.php';
$database = new DataSource();
$sql = "SELECT * FROM forumcepat ORDER BY id DESC";
$result = $database->select($sql);
?>



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
    <link rel="stylesheet" href="../assets/plugins/jquery-flipster/dist/jquery.flipster.min.css">


    <!-- Satu Forum CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Awal Header -->
    <header class="header">
        <div class="branding">
            <div class="container position-relative">
                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo"><a class="navbar-brand" href="/"><img style="height: 100px; width: 100px;"
                                class="logo-icon" src="../assets/images/logo.png" alt="logo"></a></h1>
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

    <!-- Awal Forum -->
    <section class="hero-section">
        <div class="container">
            <div class="row figure-holder" style="padding-bottom: 150px;">
                <div class="col-12 col-md-6 pt-3 pt-md-4" style="padding-bottom: 80px;">
                    <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Login Pengguna <br>
                    </h2>
                    <div class="site-tagline mb-3" style="font-size: 12pt;">Untuk dapat menulis di dalam fitur blog
                        bersama SatuForum, anda harus login pengguna.</div>
                    <br>
                    <a href="#">Saya belum memiliki akun <span class="more-arrow">&rarr;</span></a>
                </div>

                <?php
                if (count($_POST) > 0) {
                    require_once __DIR__ . '../../lib/DataSource.php';
                    $database = new DataSource();
                    $sql = "INSERT INTO forumcepat (tanggal, waktu, nama, lokasi, judul, isi, ket) VALUES (?,?,?,?,?,?,?)";
                    $paramType = 'sssssss';
                    $paramValue = array(
                        $_POST["tanggal"],
                        $_POST["waktu"],
                        $_POST["nama"],
                        $_POST["lokasi"],
                        $_POST["judul"],
                        $_POST["isi"],
                        $_POST["ket"]
                    );
                    $database->insert($sql, $paramType, $paramValue);
                    echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = '../index.php';
            </script>
        ";
                }
                ?>

                <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5" >
                    <form name="frmUser" id="forum-form" class="forum-form" method="post" action="" >
                        <h3 class="text-left mb-4">Login</h3>
                        <div class="row g-3">
                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <label class="sr-only" for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Silahkan masukan nama anda" minlength="2" required=""
                                    aria-required="true">
                            </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <label class="sr-only" for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Silahkan masukan email anda" minlength="2" required="" aria-required="true">
                            </div>

                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <label class="sr-only" for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Silahkan masukan password anda" minlength="2" required=""
                                    aria-required="true">
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" name="submit" value="Add"
                                    class="btn w-100 btn-primary py-2">Sebarkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- Akhir Forum -->

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
            <small class="copyright">Dibuat Oleh : Bima Maarschal &nbsp; | &nbsp; Code : <i class="fab fa-github fa-fw"
                    style="color: #57B147;"></i>Bimamaarschal</small>
        </div>
    </footer>
    <!-- Akhir Footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="../assets/plugins/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Page Specific JS -->
    <script type="text/javascript" src="../assets/plugins/jquery-flipster/dist/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="../assets/js/flipster-custom.js"></script>
</body>

</html>