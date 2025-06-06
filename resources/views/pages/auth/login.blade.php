@section("title", "Login, Komunitas Kesehatan")
@extends("layouts.authn")
@section("content")
				<div class="container">
								<!-- Outer Row -->
								<div class="row justify-content-center">
												<div class="col-xl-10 col-lg-12 col-md-9">
																<div class="card o-hidden my-5 border-0 shadow-lg">
																				<div class="card-body p-0">
																								<!-- Nested Row within Card Body -->
																								<div class="row">
																												<div class="col-lg-6 d-none d-lg-block bg-login-image">
																																<img src="{{ asset("assets/img/3.jpeg") }}" width="460" height="385" alt="Logo PPPI">
																												</div>
																												<div class="col-lg-6">
																																<div class="p-5">
																																				<div class="text-center">
																																								@if (session("error"))
																																												<div class="alert alert-danger">
																																																{{ session("error") }}
																																												</div>
																																								@endif
																																								<h1 class="h4 mb-4 text-gray-900">Selamat Datang !</h1>
																																				</div>
																																				<form class="user" action="/login" method="POST">
																																								@csrf
																																								@method("POST")
																																								<div class="form-group">
																																												<input type="email" class="form-control form-control-user" id="inputEmail"
																																																name="email" aria-describedby="emailHelp"
																																																placeholder="Enter Email Address...">
																																								</div>
																																								<div class="form-group">
																																												<input type="password" class="form-control form-control-user" id="inputPassword"
																																																name="password" placeholder="Password">
																																								</div>
																																								<button type="submit" class="btn btn-success btn-user btn-block">
																																												Login
																																								</button>
																																				</form>
																																				<hr>
																																				<div class="text-center">
																																								<a class="small" href="/register">Create an Account!</a>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
@endsection
