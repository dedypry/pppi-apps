@section("title", "Login PPPI")

@section("content")
				<div class="container">
								<div class="row mt-5">
												<div class="col mb-5">
																<div class="w-50 center mx-auto rounded border px-3 py-3">
																				<h1 class="text-center">Login</h1>
																				<form action="/sesi/login" method="POST">
																								@csrf
																								<div class="mb-3">
																												<label for="email" class="form-label">Email</label>
																												<input type="email" class="form-control" id="email" name="email" required>
																								</div>
																								<div class="mb-3">
																												<label for="password" class="form-label">Password</label>
																												<input type="password" class="form-control" id="password" name="password" required>
																								</div>
																								<div class="d-grid mb-3">
																												<button name="submit" type="submit" class="btn btn-primary">Login</button>
																								</div>
																				</form>
																				{{-- <div class="mt-3 text-center">
        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p> --}}
																</div>
												</div>
								</div>
				</div>
@endsection
