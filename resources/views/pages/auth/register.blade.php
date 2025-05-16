@section("title", "Register, Komunitas Kesehatan")
@extends("layouts.authn")
@section("content")
				<div class="container">

								<div class="card o-hidden my-5 border-0 shadow-lg">
												<div class="card-body p-0">
																<!-- Nested Row within Card Body -->
																<div class="row">
																				<div class="col-lg-5 d-none d-lg-block bg-register-image">
																								<img src="{{ asset("assets/img/3.jpeg") }}" width="460" height="450" alt="Logo PPPI">
																				</div>
																				<div class="col-lg-7">
																								<div class="p-5">
																												<div class="text-center">
																																<h1 class="h4 mb-4 text-gray-900">Registrasi</h1>
																												</div>
																												<form class="user" action="/register" method="POST">
																																@csrf
																																@method("POST")
																																@if (session("error"))
																																				<div class="alert alert-danger">
																																								{{ session("error") }}
																																				</div>
																																@endif
																																<div class="form-group row">
																																				<div class="col-sm-12 mb-sm-0 mb-3">
																																								<input type="text" class="form-control form-control-user" name="name"
																																												id="inputName" placeholder="Nama Panjang">
																																				</div>
																																</div>
																																<div class="form-group">
																																				<input type="email" class="form-control form-control-user" id="inputEmail"
																																								name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
																																</div>
																																<div class="form-group row">
																																				<div class="col-sm-6 mb-sm-0 mb-3">
																																								<input type="password" class="form-control form-control-user" id="inputPassword"
																																												name="password" placeholder="Password">
																																				</div>
																																				<div class="col-sm-6">
																																								<input type="password" class="form-control form-control-user" id="repeatPassword"
																																												name="password" placeholder="Repeat Password">
																																				</div>
																																</div>
																																<button type="submit" class="btn btn-primary btn-user btn-block">
																																				Register Account
																																</button>
																												</form>
																												<hr>
																												<div class="text-center">
																																<a class="small" href="/login">Already have an account? Login!</a>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>

				</div>
@endsection
