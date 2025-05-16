@extends("layouts.app")

@section("content")
				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h3 mb-0 text-gray-800">KTA PPPI</h1>
								<a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
																class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
				</div>

				<!-- Content Row -->
				<div class="row">
								<div class="col">
												<div class="card border-0 shadow">
																<div class="card-body table-responsive">
																				<table class="table-bordered table-hovered table">
																								<thead>
																												<tr>
																																<th>No</th>
																																<th>No KTA</th>
																																<th>Nama</th>
																																<th>Jenis Kelamin</th>
																																<th>Tempat, Tanggal Lahir</th>
																																<th>Alamat</th>
																																<th>Agama</th>
																																<th>Telepon</th>
																																<th>Status KTA</th>
																																<th>Aksi</th>
																												</tr>
																								</thead>
																								@if (count($residents) < 1)
																												<tbody>
																																<tr>
																																				<td colspan="9" class="text-center">Data Kosong</td>
																																</tr>
																												</tbody>
																								@else
																												<tbody>
																																@foreach ($residents as $item)
																																				<tr>
																																								<td>{{ $loop->iteration }}</td>
																																								<td>{{ $item->nik }}</td>
																																								<td>{{ $item->name }}</td>
																																								<td>{{ $item->gender }}</td>
																																								<td>{{ $item->birth_place }}, {{ $item->birth_date }}</td>
																																								<td>{{ $item->address }}</td>
																																								<td>{{ $item->religion }}</td>
																																								<td>{{ $item->phone }}</td>
																																								<td>{{ $item->status }}</td>
																																								<td>
																																												<a href="/resident/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>

																																												<button type="button" class="btn btn-danger btn-sm mt-1" data-bs-toggle="modal"
																																																data-bs-target="#confirmationDelete-{{ $item->id }}">Delete</button>
																																				</tr>
																																				@include("pages.resident.confirmation-delete")
																																@endforeach
																												</tbody>
																								@endif
																				</table>
																</div>
												</div>
								</div>
				</div>
@endsection
