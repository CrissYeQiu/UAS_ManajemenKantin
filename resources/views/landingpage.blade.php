<!DOCTYPE html>
<html lang="en">
	<head>
    	<!-- 
    	Boxer Template
    	http://www.templatemo.com/tm-446-boxer
    	-->
		<meta charset="utf-8">
		<title>Waroeng Luminthue's</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}}">

	</head>
	<body>
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#home" class="navbar-brand">Luminthue's</a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Beranda</a></li>
						<li><a href="#feature">Makanan</a></li>
						<li><a href="#pricing">Harga</a></li>
						<li><a href="#contact">Kontak Kami</a></li>

						<!-- Tombol Masuk -->
						<li>
							<a href="{{ route('login') }}" class="btn-login">
								Masuk
							</a>
						</li>

						<!-- Tombol Daftar -->
						<li>
							<a href="{{ route('register') }}" class="btn-register">
								Daftar
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Waroeng Luminthue's</h1>
							<p class="tm-white">Waroeng Luminthue's adalah tempat kuliner yang menghadirkan suasana hangat dan nyaman dengan sajian makanan serta minuman yang menggugah selera. Mengusung konsep warung modern dengan sentuhan tradisional, Waroeng Luminthue's menawarkan berbagai pilihan menu yang cocok dinikmati bersama keluarga, teman, maupun rekan kerja. Dengan cita rasa khas, harga yang terjangkau, dan pelayanan yang ramah, tempat ini menjadi pilihan tepat untuk bersantai sambil menikmati hidangan berkualitas dalam suasana yang santai dan menyenangkan.</p>
							<img src="{{asset('assets/img/makanan.png')}}" class="img-responsive" alt="home img">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Pecel Kediri</h2>
						<p>Pecel Kediri merupakan hidangan khas dari Kediri yang terdiri dari aneka sayuran segar seperti kangkung, tauge, dan kacang panjang yang disiram dengan bumbu kacang khas bercita rasa gurih, manis, dan sedikit pedas. Disajikan dengan pelengkap seperti rempeyek atau lauk pilihan, menu ini menghadirkan cita rasa tradisional yang autentik dan menggugah selera.</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="{{asset('assets/img/pecel.png')}}" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start feature1 -->
		<section id="feature1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<img src="{{asset('assets/img/rawon.png')}}" class="img-responsive" alt="feature img">
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Rawon</h2>
						<p>Rawon merupakan kuliner khas Jawa Timur yang terkenal dengan kuah hitamnya yang khas, berasal dari penggunaan kluwek sebagai bumbu utama. Hidangan ini disajikan dengan potongan daging sapi yang empuk dan dimasak bersama rempah-rempah pilihan sehingga menghasilkan cita rasa gurih, kaya, dan menggugah selera. Nikmati kelezatan rawon bersama nasi hangat, tauge segar, sambal, dan pelengkap lainnya untuk pengalaman kuliner tradisional yang autentik dan memuaskan.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature1 -->

		<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">Harga Makanan Populer</h2>
					</div>
						<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
							<div class="pricing">
								<div class="pricing-title text-center">
									<!-- Gambar makanan -->
									<img src="{{asset('assets/img/rawon.png')}}"
										alt="Rawon"
										style="width:100%; height:220px; object-fit:contain; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.2); margin-bottom:15px;">
									<!-- Nama makanan -->
									<h4 class="text-uppercase">Rawon</h4>
									<!-- Harga -->
									<p>Rp15.000</p>
									<!-- Deskripsi singkat -->
									<small>Kuah hitam khas dengan daging sapi empuk dan rempah pilihan.</small>
								</div>
								<button class="btn btn-primary text-uppercase">
									Pesan Sekarang
								</button>
							</div>
						</div>
						<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
							<div class="pricing">
								<div class="pricing-title text-center">
									<!-- Gambar makanan -->
									<img src="{{asset('assets/img/pecel.png')}}"
										alt="Pecel Kediri"
										style="width:100%; height:220px; object-fit:contain; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.2); margin-bottom:15px;">
									<!-- Nama makanan -->
									<h4 class="text-uppercase">Pecel Kediri</h4>
									<!-- Harga -->
									<p>Rp10.000</p>
									<!-- Deskripsi singkat -->
									<small>Aneka sayuran segar disiram dengan bumbu kacang khas.</small>
								</div>
								<button class="btn btn-primary text-uppercase">
									Pesan Sekarang
								</button>
							</div>
						</div>
						<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
							<div class="pricing">
								<div class="pricing-title text-center">
									<!-- Gambar makanan -->
									<img src="{{asset('assets/img/bakso.png')}}"
										alt="Bakso Malang"
										style="width:100%; height:220px; object-fit:contain; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.2); margin-bottom:15px;">
									<!-- Nama makanan -->
									<h4 class="text-uppercase">Bakso Malang</h4>
									<!-- Harga -->
									<p>Rp12.000</p>
									<!-- Deskripsi singkat -->
									<small>Bakso Malang dengan kuah kaldu yang lezat dan daging sapi yang empuk.</small>
								</div>
								<button class="btn btn-primary text-uppercase">
									Pesan Sekarang
								</button>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!-- end pricing -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Kontak Kami</h2>
							<p>Hubungi kami untuk informasi lebih lanjut, pemesanan, atau pertanyaan seputar layanan dan menu yang tersedia di Waroeng Luminthue's.</p>
							<address>
								<p><i class="fa fa-map-marker"></i> Jl.Terusan Surabaya, No. 123, Kota Malang</p>
								<p><i class="fa fa-phone"></i>081234567890</p>
								<p><i class="fa fa-envelope-o"></i> luminthues@company.com</p>
							</address>
						</div>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<div class="contact-form">
								<form action="#" method="post">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Nama">
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="Subjek">
									</div>
									<div class="col-md-12">
										<textarea class="form-control" placeholder="Pesan" rows="4"></textarea>
									</div>
									<div class="col-md-8">
										<input type="submit" class="form-control text-uppercase" value="Kirim Pesan">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2026 Waroeng Luminthue's</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->
        
		<script src="{{asset('assets/js/jquery.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/wow.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.singlePageNav.min.js')}}"></script>
		<script src="{{asset('assets/js/custom.js')}}"></script>
	</body>
</html>