
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

    <!-- Awal gagal -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "
            <div class='demo-banner py-3 text-white text-center font-weight-bold theme-bg-secondary text-white'>Anda gagal masuk, cek email atau password lalu masuk kembali.
        </div>";
        }
    }
    ?>
    <!-- Akhir Gagal -->

    <!-- Awal Ditolak -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "ditolak") {
            echo "
            <div class='demo-banner py-3 text-white text-center font-weight-bold theme-bg-secondary text-white'>Anda perlu masuk, untuk dapat ke tampilan tulis blog.
        </div>";
        }
    }
    ?>
    <!-- Akhir Ditolak -->


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

    <!-- Awal Index Masuk -->
    <section class="hero-section">
        <div class="container">
            <div class="row figure-holder" style="padding-bottom: 150px;">
                <div class="col-12 col-md-6 pt-3 pt-md-4" style="padding-bottom: 80px;">
                    <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Masuk Pengguna <br>
                    </h2>
                    <div class="site-tagline mb-3" style="font-size: 12pt;">Untuk dapat menulis di dalam fitur blog
                        bersama SatuForum, anda harus masuk pengguna.</div>
                    <br>
                    <a href="../index.php"><span class="more-arrow">&larr;</span> Kembali</a> | <a href="#">Saya belum
                        memiliki akun <span class="more-arrow">&rarr;</span></a>
                </div>
                <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                    <form name="frmUser" id="forum-form" class="forum-form" method="post" action="fungsi/fct_masuk.php">
                        <h3 class="text-left mb-4">Masuk</h3>
                        <div class="row g-3">
                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <div class="col-12">
						            <div style="font-size: 12pt;" class="site-tagline mb-2">Email</div>
						        </div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="--@--.--" minlength="2" required=""
                                    aria-required="true">
                            </div>

                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <div class="col-12">
						            <div style="font-size: 12pt;" class="site-tagline mb-2">Password</div>
						        </div>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="***" minlength="2" required=""
                                    aria-required="true">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" value="submit"
                                    class="btn w-100 btn-primary py-2">Masuk</button>
                            </div>
                        </div>
                    </form>

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
    <script type="text/javascript" src="../assets/plugins/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Page Specific JS -->
    <script type="text/javascript" src="../assets/plugins/jquery-flipster/dist/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="../assets/js/flipster-custom.js"></script>
</body>

</html>