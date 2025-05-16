@extends("layouts.m_pppi")
@section("title", "Kesehatan, Komunitas Kesehatan")

@section("content")
				<div class="header pt-5">
								<div class="container">
												<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
																<div class="carousel-inner">
																				<div class="carousel-item active">
																								<img src="{{ asset("assets/img/1.jpeg") }}" class="d-block w-100" alt="...">
																				</div>
																				<div class="carousel-item">
																								<img src="{{ asset("assets/img/2.jpeg") }}" class="d-block w-100" alt="...">
																				</div>
																				<div class="carousel-item">
																								<img src="{{ asset("assets/img/3.jpeg") }}" class="d-block w-100" alt="...">
																				</div>
																</div>
																<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
																				data-bs-slide="prev">
																				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																				<span class="visually-hidden">Previous</span>
																</button>
																<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
																				data-bs-slide="next">
																				<span class="carousel-control-next-icon" aria-hidden="true"></span>
																				<span class="visually-hidden">Next</span>
																</button>
												</div>
								</div>
				</div>

				<!-- Hero Section -->
				<div class="d-none d-lg-block container mt-4">
								<div class="hero row mx-auto">
												<div class="container my-2">
																<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
																				<div class="col">
																								<a href="">
																												<div class="card h-100 text-center">
																																<div class="card-body card-content">
																																				<i class="fa-regular fa-handshake fa-2x"></i>
																																				<h5 class="card-title mt-2">E-Konsultasi</h5>
																																</div>
																												</div>
																								</a>
																				</div>
																				<div class="col">
																								<a href="https://www.jurnal-ppni.org/ojs/index.php/jppni">
																												<div class="card h-100 text-center">
																																<div class="card-body">
																																				<i class="fa-regular fa-newspaper fa-2x"></i>
																																				<h5 class="card-title mt-2">E-Jurnal</h5>
																																</div>
																												</div>
																								</a>
																				</div>
																				<div class="col">
																								<a href="/register">
																												<div class="card h-100 text-center">
																																<div class="card-body">
																																				<i class="fa-regular fa-pen-to-square fa-2x"></i>
																																				<h5 class="card-title mt-2">Registrasi</h5>
																																</div>
																												</div>
																								</a>
																				</div>
																				<div class="col">
																								<a href="/login">
																												<div class="card h-100 text-center">
																																<div class="card-body">
																																				<i class="fa-regular fa-address-card fa-2x"></i>
																																				<h5 class="card-title mt-2">Member</h5>
																																</div>
																												</div>
																								</a>
																				</div>
																</div>
												</div>
								</div>
				</div>
				<!-- End Hero Section -->

				<!-- Berita Section -->
				<div class="container mt-4">
								<div class="berita row mx-auto">
												<div class="col-md-8 my-3">
																<h2>Berita Terbaru</h2>
																<p>Berita Terbaru Perkumpulan Perawat Pembaharuan Indonesia</p>
																<div class="card mb-3">
																				<div class="row g-0">
																								<div class="col-md-4">
																												<img src="https://ppni-inna.org/images/cms_content/IO3Pbl2ge4e99VhCIOzVxoSV4owAoR.jpg"
																																class="img-fluid rounded-start" alt="Gambar Berita 1">
																								</div>
																								<div class="col-md-8">
																												<div class="card-body">
																																<h5 class="card-title">Menkes Imbau Pemudik Lebaran 2025 Untuk Tetap Jaga Kondisi Kesehatan
																																</h5>
																																<p class="card-text"><small class="text-muted">Kamis, 27 Maret 2025</small></p>
																																<a href="#" class="btn btn-primary">Selengkapnya</a>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="card mb-3">
																				<div class="row g-0">
																								<div class="col-md-4">
																												<img src="https://ppni-inna.org/images/cms_content/sfXsU7OQFZuiZJ4Vt8I26ZMjN57FLE.jpg"
																																class="img-fluid rounded-start" alt="Gambar Berita 2">
																								</div>
																								<div class="col-md-8">
																												<div class="card-body">
																																<h5 class="card-title">HUT Ke - 51 PPNI : Wabup Kuningan Tuti Andriani Apresiasi Perawat
																																				Atas Dedikasi ...</h5>
																																<p class="card-text"><small class="text-muted">Kamis, 27 Maret 2025</small></p>
																																<a href="#" class="btn btn-primary">Selengkapnya</a>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="card mb-3">
																				<div class="row g-0">
																								<div class="col-md-4">
																												<img src="https://ppni-inna.org/images/cms_content/XvucXyH39LgVwemIJYBRqpjdnxNp1M.jpg"
																																class="img-fluid rounded-start" alt="Gambar Berita 3">
																								</div>
																								<div class="col-md-8">
																												<div class="card-body">
																																<h5 class="card-title">Aliyardi Lantik Pengurus DPW PPNI Jambi : Fokus Program Kerja
																																				Strategis & Bersinergi Menuju Visi Jambi Sehat 2030</h5>
																																<p class="card-text"><small class="text-muted">Rabu, 26 Maret 2025</small></p>
																																<a href="#" class="btn btn-primary">Selengkapnya</a>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="card mb-3">
																				<div class="row g-0">
																								<div class="col-md-4">
																												<img src="https://ppni-inna.org/images/cms_content/GnfSYZWy8zjA4aSBxhEANz0dUgt0E4.jpg"
																																class="img-fluid rounded-start" alt="Gambar Berita 4">
																								</div>
																								<div class="col-md-8">
																												<div class="card-body">
																																<h5 class="card-title">DPD PPNI Kabupaten Kebumen Gelar Buka Puasa Bersama : Untuk Perkuat
																																				Silaturahmi</h5>
																																<p class="card-text"><small class="text-muted">Rabu, 26 Maret 2025</small></p>
																																<a href="#" class="btn btn-primary">Selengkapnya</a>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="card mb-3">
																				<div class="row g-0">
																								<div class="col-md-4">
																												<img src="https://ppni-inna.org/images/cms_content/wxEPmI4ytqsHtKAv2xTQqb61jWgSEl.jpg"
																																class="img-fluid rounded-start" alt="Gambar Berita 5">
																								</div>
																								<div class="col-md-8">
																												<div class="card-body">
																																<h5 class="card-title">Peringatan HUT Ke-51 PPNI, Wayan Koster : Pemda Bali Akan Terus
																																				Bersinergi Bersama PPNI</h5>
																																<p class="card-text"><small class="text-muted">Rabu, 26 Maret 2025</small></p>
																																<a href="#" class="btn btn-primary">Selengkapnya</a>
																												</div>
																								</div>
																				</div>
																</div>

												</div>

												<div class="col-md-4 my-3">
																<h2>Agenda</h2>
																<div class="card mb-3">
																				<div class="card-body">
																								<h5 class="card-title">The 2nd ICINNA Conference 2019</h5>
																								<p class="card-text">28 Feb 2022, Pullman Jakarta Park, Jakarta Pusat</p>
																								<a href="#" class="btn btn-secondary">Selengkapnya</a>
																				</div>
																</div>

																<div class="card mb-3">
																				<div class="card-body">
																								<h5 class="card-title">Buku Panduan Penyusunan PAK</h5>
																								<p class="card-text">Selasa, 25 Maret 2025</p>
																								<a href="#" class="btn btn-secondary">Selengkapnya</a>
																				</div>
																</div>
																<div class="col-12">
																				<div class="card">
																								<iframe src="https://www.youtube.com/embed/d4ge0pwucxc?si=H2dw4ftzTLlJlPh5"
																												title="YouTube video player" frameborder="0"
																												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
																												referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
																								<div class="card-body">
																												<h5 class="card-title">NURSING ZOOMINAR #292 FOOTCARE & P</h5>
																												<p class="card-text">Dr. BM.PK & Astuti Yuri Nurs</p>
																								</div>
																				</div>
																</div>

												</div>
								</div>
				</div>
@endsection
