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
    <?php
    include_once("../fungsi/fct_tambah_tulis_pengguna.php");
    ?>
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
                    <a href="tulis_pengguna.php"><span class="more-arrow">&larr;</span> kembali</a>
                    <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Anda dapat menulis di blog terbuka ini
                        <br>
                    </h2>
                    <div class="site-tagline mb-3" style="font-size: 12pt;">Pelanggaran ketentuan umum pada tulis akan
                        di hapus oleh admin dari SatuForum.</div>

                </div>
                <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                    <h3 class="text-left mb-4">Tulisan Baru Saya</h3>
                    <form name="frmUser" id="forum-form" class="forum-form" method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <label class="sr-only" for="idtulis">ID Tulisan</label>
                                <input type="text" class="form-control" id="idtulis" name="idtulis" value="ID<?php echo date('dmYhi'); ?>" placeholder="ID<?php date('dmYhi'); ?>" minlength="2" required=""
                                    aria-required="true" disabled>
                            </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <label class="sr-only" for="tanggal">tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" minlength="2"
                                    required="" aria-required="true">
                            </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <label class="sr-only" for="pengguna">pengguna</label>
                                <input type="text" class="form-control" name="pengguna" id="pengguna" minlength="2" value="<?= $datas['nama'] ?>"
                                    required="" aria-required="true" disabled>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <label class="sr-only" for="judul">judul</label>
                                <input type="text" class="form-control" name="judul" id="judul"
                                    placeholder="Silahkan tuliskan judul tulisan anda" minlength="2" required=""
                                    aria-required="true">
                            </div>           
                            <div class="col-12" style="padding-bottom: 20px;">
                                <label class="sr-only" for="isi">Isi Berita, Baris Paragraf 1</label>
                                <textarea class="form-control" id="isi" name="isi" placeholder="Isi dengan berita anda"
                                    rows="10" required="" aria-required="true"></textarea>
                            </div>

                            <div class="col-12" style="padding-bottom: 20px;">
                                <label class="sr-only" for="isi2">Isi Berita, Baris Paragraf 2</label>
                                <textarea class="form-control" id="isi2" name="isi2" placeholder="Isi dengan berita anda paragraf 2"
                                    rows="10" required="" aria-required="true"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" value="Add"
                                    class="btn w-100 btn-primary py-2">Sebarkan</button>
                            </div>
                        </div>
                    </form>



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