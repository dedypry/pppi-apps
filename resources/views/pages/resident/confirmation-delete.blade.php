<!-- Modal -->
<div class="modal fade" id="confirmationDelete-{{ $item->id }}" tabindex="-1" aria-labelledby="confirmationDeleteLabel"
				aria-hidden="true">
				<div class="modal-dialog">
								<form action="/resident/{{ $item->id }}" method="post">
												@csrf
												@method("DELETE")
												<div class="modal-content">
																<div class="modal-header">
																				<h4 class="modal-title fs-5" id="confirmationDeleteLabel">Konfirmasi Hapus</h4>
																</div>
																<div class="modal-body">
																				Apakah Anda yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan.
																</div>
																<div class="modal-footer">
																				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
																				<button type="submit" class="btn btn-outline-danger">Ya, Hapus !!!</button>
																</div>
												</div>
								</form>
				</div>
</div>
