@extends("layouts.app")
@section("content")
				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">Tambah KTA PPPI</h1>
				</div>

				<!-- Content Row -->
				<div class="row">
								<div class="col">
												<form action="/resident" method="post">
																@csrf
																@method("POST")
																{{-- <div class="card mb-4 border-0 shadow">
																				<div class="card-header d-flex align-items-center justify-content-between flex-row py-3">
																								<h6 class="font-weight-bold text-primary m-0">Formulir Pendaftaran KTA</h6>
																								<p class="mb-0">Silahkan isi formulir berikut untuk mendaftar sebagai anggota PPPI.</p>
																				</div>
																</div> --}}
																<div class="card border-0 shadow">
																				<div class="card-body">
																								<div class="form-group mb-3">
																												<label for="nik">No KTA</label>
																												<input type="number" class="form-control @error("nik") is-invalid @enderror" id="nik"
																																name="nik" placeholder="No KTA Anda" required value="{{ old("nik") }}">
																												@error("nik")
																																<div class="invalid-feedback">{{ $message }}</div>
																												@enderror
																								</div>
																								<div class="form-group mb-3">
																												<label for="name">Nama</label>
																												<input type="text" class="form-control" id="name" name="name"
																																placeholder="Nama Lengkap" required value="{{ old("name") }}">
																								</div>
																								<div class="form-group mb-3">
																												<label for="gender">Jenis Kelamin</label>
																												<select name="gender" id="gender" class="form-control" required>
																																<option value="male">Laki-laki</option>
																																<option value="female">Perempuan</option>
																												</select>
																								</div>
																								<div class="form-group mb-3">
																												<label for="birth_place">Tempat Lahir</label>
																												<input type="text" class="form-control" id="birth_place" name="birth_place"
																																placeholder="Tempat Lahir" required value="{{ old("birth_place") }}">
																								</div>
																								<div class="form-group mb-3">
																												<label for="birth_date">Tanggal Lahir</label>
																												<input type="date" class="form-control" id="birth_date" name="birth_date"
																																placeholder="Tanggal Lahir" required value="{{ old("birth_date") }}">
																								</div>
																								<div class="form-group mb-3">
																												<label for="address">Alamat</label>
																												<textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Alamat Lengkap"
																												    required></textarea>
																								</div>
																								<div class="form-group mb-3">
																												<label for="religion">Agama</label>
																												<input type="text" class="form-control" id="religion" name="religion" placeholder="Agama"
																																required value="{{ old("religion") }}">
																								</div>
																								<div class="form-group mb-3">
																												<label for="phone">Telepon</label>
																												<input type="number" class="form-control" id="phone" name="phone"
																																placeholder="No Telepon" required value="{{ old("phone") }}">
																								</div>
																								<div class="form-group mb-3">
																												<label for="status">Status KTA</label>
																												<select name="status" id="status" class="form-control" required value="{{ old("status") }}">
																																<option value="active">Aktif</option>
																																<option value="moved">Pindahan</option>
																																<option value="deceased">Tidak Aktif</option>
																												</select>
																								</div>

																				</div>
																				<div class="card-footer d-flex justify-content-end">
																								<a href="/resident" class="btn btn-secondary mr-2">Kembali</a>
																								<button type="submit" class="btn btn-success">Simpan</button>
																				</div>
																</div>
												</form>
								</div>
				</div>
@endsection
