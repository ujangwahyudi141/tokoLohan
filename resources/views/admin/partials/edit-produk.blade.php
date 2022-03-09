@extends('admin.dashboard')

@section('konten')
<div class="card mt-2 shadow">
    <div class="card-header">
      <strong>Tambah Data Produk</strong>
    </div>
    <div class="card-body">
        <form action="/update-produk/{{ $data->id }}" method="POST" >
            @csrf
            <div class="mb-3">
              <label for="nama-produk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="nama-produk" name="namaProduk" value="{{ $data->namaProduk }}" required>
            </div>
            <div class="mb-3">
              <label for="kategori-produk" class="form-label">Kategori Produk</label>
              <select class="form-control" id="kategori-produk" name="kategoriProduk">
                  <option selected>Pilih Kategori Produk</option>
                  @foreach ($kategoris  as $kategori)
                  <option value="{{ $kategori->id }}">{{ $kategori->namaKategori }}</option>
                  @endforeach
              </select>
            </div>
            <div class="mb-3">
                <label for="satuan-produk" class="form-label">Satuan Produk</label>
                <input type="string" class="form-control" id="satuan-produk" name="satuanProduk" value="{{ $data->satuanProduk }}" required>
              </div>
            <div class="mb-3">
                <label for="harga-produk" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="harga-produk" name="hargaProduk" value="{{ $data->hargaProduk }}" required>
              </div>
            <div class="mb-3">
                <label for="stok-produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok-produk" name="stokProduk" value="{{ $data->stokProduk }}" required>
              </div>
              <div class="mb-3">
                <label for="deskripsi-produk" class="form-label">Deskripsi Produk</label>
                <input type="text" class="form-control" id="deskripsi-produk" name="deskripsiProduk" value="{{ $data->deskripsiProduk }}" required>
              </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
    </div>
  </div>
@endsection
