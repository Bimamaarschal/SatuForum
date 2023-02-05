<!-- PHP - Fungsi -->
<?php
require_once __DIR__ . '/lib/DataSource.php';
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
	<link rel="stylesheet" href="assets/plugins/jquery-flipster/dist/jquery.flipster.min.css">


	<!-- Satu Forum CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- Awal Info Atas -->
	<div class="demo-banner py-3 text-white text-center font-weight-bold theme-bg-secondary text-white">Beritakan secara
		eksklusif dan kabarkan informasi secara cepat.
	</div>
	<!-- Akhir Info Atas -->


	<!-- Awal Header -->
	<header class="header">
		<div class="branding">
			<div class="container position-relative">
				<nav class="navbar navbar-expand-lg">
					<h1 class="site-logo"><a class="navbar-brand" href="/"><img style="height: 100px; width: 100px;"
								class="logo-icon" src="assets/images/logo.png" alt="logo"></a></h1>
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
			<div class="row figure-holder">
				<div class="col-12 col-md-6 pt-3 pt-md-4" style="padding-bottom: 80px;">
					<h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Satu Forum <br> Kabarkan Secara Langsung
					</h2>
					<div class="site-tagline mb-3" style="font-size: 12pt;">Satu Forum adalah media menulis kabar secara
						cepat, dengan status
						verifikasi atau anonim.</div>
					<br>
					<div class="site-tagline mb-2" style="font-size: 12pt;"><i
							class="fa fa-spinner fa-spin fa-1x fa-fw"></i>&nbsp; Aktif :
						<?php echo date('l, d-m-Y h:i a'); ?>

					</div>
					<div style="font-size: 12pt;" class="site-tagline mb-1">Berita yang baru ditambahkan, akan di
						tampilkan di bagian akhir slide</div>
				</div>
				<div id="flipster-carousel" class="flipster-carousel pt-md-3">
					<div class="flip-items pb-8">
						<?php
						sort($result);
						if (is_array($result) || is_object($result)) {
							foreach ($result as $key => $value) {
								?>

								<div class="flip-item">
									<div class="item-inner shadow-lg rounded">
										<h5 class="mb-2">
											<?php echo $result[$key]["judul"]; ?>
										</h5>

										<div class="mb-3">
											<?php echo $result[$key]["isi"]; ?>
										</div>

										<div class="source media">
											
											<div class="source-info media-body pt-3">
												<div><i class="fa fa-user-circle"></i>&nbsp; <?php echo $result[$key]["nama"]; ?></div>
												<div><i class="fa fa-calendar"></i>&nbsp; <?php echo $result[$key]["tanggal"]; ?> &nbsp; <i class="fa fa-clock"></i>&nbsp; <?php echo $result[$key]["waktu"]; ?></div>
												<div><i class="fa fa-map-pin"></i>&nbsp; <?php echo $result[$key]["lokasi"]; ?></div>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
						}
						?>
					</div>
				</div>
			</div>
	</section>
	<!-- Akhir Forum -->

	<!-- Awal Forum Tambah -->
	<?php
	if (count($_POST) > 0) {
		require_once __DIR__ . '/lib/DataSource.php';
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
                document.location.href = 'index.php';
            </script>
        ";
	}
	?>

	<section class="forum-form-section pb-5" style="padding-top: 100px;">
		<div class="container pb-5">
			<div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
				<form name="frmUser" id="forum-form" class="forum-form" method="post" action="">
					<h3 class="text-left mb-4">Forum Cepat</h3>
					<div class="row g-3">
						<div class="col-md-6" style="padding-bottom: 20px;">
							<label class="sr-only" for="tanggal">tanggal</label>
							<input type="date"  class="form-control" name="tanggal" id="tanggal"
								minlength="2" required=""
								aria-required="true" >
						</div>
						<div class="col-md-6" style="padding-bottom: 20px;">
							<label class="sr-only" for="waktu">waktu</label>
							<input type="time"  class="form-control" name="waktu" id="waktu"
								minlength="2" required=""
								aria-required="true" >
						</div>
						<div class="col-md-6" style="padding-bottom: 20px;">
							<label class="sr-only" for="nama">Nama</label>
							<input type="text" class="form-control" name="nama" id="nama"
								placeholder="Silahkan masukan nama anda" minlength="2" required="" aria-required="true">
						</div>
						<div class="col-md-6" style="padding-bottom: 20px;">
							<label class="sr-only" for="lokasi">Lokasi</label>
							<input type="text" class="form-control" name="lokasi" id="lokasi"
								placeholder="Silahkan isi lokasi" minlength="2" required="" aria-required="true">
						</div>

						<div class="col-md-12" style="padding-bottom: 20px;">
							<label class="sr-only" for="judul">Judul</label>
							<input type="text" class="form-control" id="judul" name="judul"
								placeholder="Isi dengan judul berita anda" minlength="2" required=""
								aria-required="true">
						</div>

						<div class="col-12" style="padding-bottom: 20px;">
							<label class="sr-only" for="isi">Isi Berita</label>
							<textarea class="form-control" id="isi" name="isi" placeholder="Isi dengan berita anda"
								rows="10" required="" aria-required="true"></textarea>
						</div>
						<div class="col-12">
						<div style="font-size: 12pt;" class="site-tagline mb-3"> Anda akan meverfikasi berita secara sah</div>
						</div>
						<div class="col-6">
						<input type="radio" name="ket" value="Saya verifikasi berita ini">&nbsp; Saya verifikasi berita ini
						</div>
						<div class="col-6 mb-5" >
  						<input type="radio" name="ket" value="Saya tidak dapat verifikasi berita ini">&nbsp; Saya tidak dapat verifikasi berita ini
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
	<!-- Akhir Forum Tambah -->

	<!-- Awal Blog Tambah -->
	<section class="cta-section py-5 theme-bg-secondary text-center">
		<div class="container">
			<h3 class="text-white font-weight-bold mb-3">Blog bersama, tulis blog di dalam satu ruang web yang sama</h3>
			<a class="btn theme-btn theme-btn-ghost theme-btn-on-bg mt-4"
				href="page/masuk.php">Saya Ingin Menulis</a>
		</div>
	</section>
	<!-- Akhir Blog Tambah -->

	<!-- Awal Blog Teratas-->
	<section class="benefits-section py-5">

		<div class="container py-lg-5">
			<h3 class="mb-5 text-center font-weight-bold">Blog Teratas</h3>
				<div class="col-12 col-md-12 col-xl-12 pr-xl-3 pt-md-3">
					<div class="card rounded border-0 shadow-lg  mb-5">
						<div class="card-body p-4">
							<h5 class="card-title"><i
									class="far fa fa-folder-open mr-2 mr-lg-3 text-primary fa-lg fa-fw"></i>Daftar 10 Kota Paling Berbahaya di Dunia 2023, Meksiko Paling Mengerikan</h5>
							<p class="card-text"> Mengunjungi tempat baru di berbagai belahan bumi memang menyenangkan. Selain sebagai sarana hiburan, kesempatan mempelajari budaya lokal juga menjadi pengalaman berharga yang tak terlupakan. <a
									href="#"
									target="_blank"> Lihat lengkap</a>. </p>
							<a href="#">Baca selanjutnya <span class="more-arrow">&rarr;</span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="pt-3 text-center">
				<a class="btn btn-primary theme-btn theme-btn-ghost font-weight-bold" href="#">Baca Selanjutnya</a>
			</div>
		</div>

	</section>
	<!-- Akhir Blog Teratas-->

	<!-- Awal Kata-kata-->
	<section class="cta-section py-5 theme-bg-secondary text-center">
		<div class="container">
			<h3 class="text-white font-weight-bold">"Seorang penulis profesional adalah seorang amatir yang tidak berhenti."</h3>
			<h3 class="text-white font-weight-bold mb-3" style="font-size: 12pt;">Richard Bach</h3>

		</div>
	</section>
	<!-- Akhir Kata-kata-->

	<!-- Awal Footer-->
	<footer class="footer theme-bg-primary" style="padding-top: 50px;">
		<div class="footer-bottom text-center pb-5">
			<small class="copyright">Dibuat Oleh : Bima Maarschal &nbsp; | &nbsp; <a href="https://github.com/Bimamaarschal/SatuForum">Code : <i class="fab fa-github fa-fw"
                    style="color: #57B147;"></i>Bimamaarschal</a></small>
		</div>
	</footer>
	<!-- Akhir Footer-->

	<!-- Javascript -->
	<script type="text/javascript" src="assets/plugins/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/plugins/popper.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Page Specific JS -->
	<script type="text/javascript" src="assets/plugins/jquery-flipster/dist/jquery.flipster.min.js"></script>
	<script type="text/javascript" src="assets/js/flipster-custom.js"></script>
</body>

</html>