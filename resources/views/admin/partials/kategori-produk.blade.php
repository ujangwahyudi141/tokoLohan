@extends('admin.dashboard')

@section('konten')
<div class="card mt-2">
    <h5 class="card-header">Data Produk</h5>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKategori">
            Tambah Kategori
        </button>
        <div class="modal fade" id="tambahKategori" tabindex="-1" aria-labelledby="tambahKategori" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahKategori">Tambah Kategori Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/tambah-kategori" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="nama-produk" class="form-label">Nama Kategori</label>
                              <input type="text" class="form-control" id="nama-produk" name="namaKategori" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $kategori)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kategori->namaKategori }}</td>
                    <td><button type="button" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#edit-kategori{{ $kategori->id }}">
                        Edit
                    </button>
                    <div class="modal fade" id="edit-kategori{{ $kategori->id }}" tabindex="-1" aria-labelledby="edit-kategori" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit-kategori">Edit Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/edit-kategori/{{ $kategori->id }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                          <label for="nama-kaegori" class="form-label">Nama Kategori</label>
                                          <input type="text" class="form-control" id="nama-kategori" name="namaKategori" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> | <a href="/hapus-kategori/{{ $kategori->id }}" class="badge bg-danger">Hapus</a></td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </div>
@endsection
