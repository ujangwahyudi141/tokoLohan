@extends('admin.dashboard')

@section('konten')
<div class="card mt-2">
    <h5 class="card-header">Data Produk</h5>
    <div class="card-body">
        <a href="/create-produk" class="btn btn-primary">Tambah Produk</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $produk)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $produk->namaProduk }}</td>
                    <td>{{ $produk->kategoriProduk }}</td>
                    <td>{{ $produk->satuanProduk }}</td>
                    <td>Rp. {{ $produk->hargaProduk }}</td>
                    <td>{{ $produk->stokProduk }} {{ $produk->satuanProduk }}</td>
                    <td><form action="/edit-produk" class="d-inline">@csrf
                        <input type="hidden" value="{{ $produk->id }}" name="id">
                        <button type="submit"  class="badge bg-warning border-0">Edit</button></form> | <a href="/hapus-produk/{{ $produk->id }}" class="badge bg-danger">Hapus</a></td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </div>
@endsection
