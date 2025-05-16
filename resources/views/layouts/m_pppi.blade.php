@section("title", "Kesehatan, Komunitas Kesehatan")

<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta http-equiv="X-UA-Compatible" content="ie=edge">
								<title>Perkumpulan Perawat Pembaharuan Indonesia</title>
								{{-- Font Poppins --}}
								<link rel="preconnect" href="https://fonts.googleapis.com">
								<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
								<link
												href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
												rel="stylesheet">
								{{-- Bootstrap --}}
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
												integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
								{{-- Css Custom --}}
								<link rel="stylesheet" href="{{ asset("css/app.css") }}">
								<link rel="stylesheet" href="{{ asset("js/script.js") }}">
				</head>
				</head>

				<body>
								{{-- Navbar Mobile --}}
								<nav class="navbar fixed-bottom navbar-dark d-block d-lg-none shadow-lg">
												<div class="d-flex justify-content-around align-items-center w-100 p-2">
																<a href="/" class="text-decoration-none">
																				<div class="navMobile text-center">
																								<i class="fa-solid fa-house-user fa-2x"></i>
																								<p class="mb-0">Beranda</p>
																				</div>
																</a>
																<a href="" class="text-decoration-none">
																				<div class="navMobile text-center">
																								<i class="fa-regular fa-handshake fa-2x"></i>
																								<p class="mb-0">E-Konsultasi</p>
																				</div>
																</a>
																<a href="/berita" class="text-decoration-none">
																				<div class="navMobile text-center">
																								<i class="fa-solid fa-newspaper fa-2x"></i>
																								<p class="mb-0">Berita</p>
																				</div>
																</a>
																<a href="/register" class="text-decoration-none">
																				<div class="navMobile text-center">
																								<i class="fa-regular fa-pen-to-square fa-2x"></i>
																								<p class="mb-0">Registrasi</p>
																				</div>
																</a>
																<a href="/login" class="text-decoration-none">
																				<div class="navMobile text-center">
																								<i class="fa-regular fa-address-card fa-2x"></i>
																								<p class="mb-0">Member</p>
																				</div>
																</a>
												</div>

								</nav>
								{{-- Navbar Desktop --}}
								<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
												<div class="container">
																<div class="navbar-brand" href="#">
																				<img src="{{ asset("assets/img/logo.png") }}" alt="Logo" width="auto" height="45">
																</div>
																<a class="navbar-brand text-wrap">Perkumpulan Perawat Pembaharuan Indonesia</a>
																<button
																				class="navbar-toggler collapsed d-flex justify-content-around d-lg-none flex-column d-none d-lg-block"
																				type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
																				aria-expanded="false" aria-label="Toggle navigation">
																				<span class="toggler-icon top-bar"></span>
																				<span class="toggler-icon middle-bar"></span>
																				<span class="toggler-icon bottom-bar"></span>
																</button>
																<div class="navbar-collapse d-none d-lg-block collapse" id="navbarNav">
																				<ul class="navbar-nav ms-auto">
																								<li class="nav-item mx-2">
																												<a class="nav-link active" aria-current="page" href="/">Beranda</a>
																								</li>
																								<li class="nav-item dropdown mx-2">
																												<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
																																aria-expanded="false">
																																Tentang Kami
																												</a>
																												<ul class="dropdown-menu">
																																<li><a class="dropdown-item" href="/sejarah">Sejarah PPPI</a></li>
																																<li><a class="dropdown-item" href="/visidanmisi">Visi dan Misi</a></li>
																																<li><a class="dropdown-item" href="/organisasi">Struktur Organisasi</a></li>
																																<li><a class="dropdown-item" href="/lpk">LPK PPPI</a></li>
																												</ul>
																								</li>
																								<li class="nav-item dropdown mx-2">
																												<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
																																aria-expanded="false">
																																Informasi
																												</a>
																												<ul class="dropdown-menu">
																																<li><a class="dropdown-item" href="/berita">Berita</a></li>
																																<li><a class="dropdown-item" href="/gallery">Galery</a></li>
																												</ul>
																								</li>
																								<li class="nav-item mx-2">
																												<a class="nav-link" href="/kontak">Kontak</a>
																								</li>
																								<li class="nav-item mx-2">
																												<a class="nav-link" href="/">E-Konsultasi</a>
																								</li>
																				</ul>
																</div>
												</div>
								</nav>
								{{-- End Navbar --}}
								{{-- Content --}}
								@yield("content")
								{{-- End Content --}}
								{{-- Footer --}}
								<footer class="footer mt-auto py-4">
												<div class="container">
																<div class="row">
																				<div class="col-md-4">
																								<img src="{{ asset("assets/img/logo.png") }}" alt="logo" width="auto" height="45">
																								<a class="logo-footer">Perkumpulan Perawat Pembaharuan Indonesia</a>
																				</div>
																				<div class="profile col-md-4">
																								<h5>Profil</h5>
																								<ul class="list-unstyled">
																												<li><a href="/sejarah" class="text-white">Sejarah PPPI</a></li>
																												<li><a href="/visidanmisi" class="text-white">Visi dan Misi</a></li>
																												<li><a href="/organisasi" class="text-white">Struktur Organisasi</a></li>
																								</ul>
																				</div>
																				<div class="col-md-4">
																								<h5>Hubungi Kami</h5>
																								<p>Email: info@namasitus.com</p>
																								<p>Telepon: +1234567890</p>
																				</div>
																</div>
																<hr class="mt-4">
																<p class="text-center">&copy; Copyright by <span class="fw-bold">PPPI</span>
																				<script>
																								document.write(new Date().getFullYear());
																				</script>
																				All Right Reserved.
																</p>
												</div>
								</footer>
								{{-- End Footer --}}
								{{-- Script --}}
								<script src="https://kit.fontawesome.com/6ae593d043.js" crossorigin="anonymous"></script>
								<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
												integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
								</script>
				</body>

</html>
