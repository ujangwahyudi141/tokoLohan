<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Product::all();
        return view('admin.partials.produk',[
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.partials.tambah-produk',['data' => Kategori::all()]);
    }

    public function store(Request $request)
    {
       Product::create($request->all());
       return redirect('/produk');
    }

    public function edit()
    {
        return view('admin.partials.edit-produk',[
            'data' => Product::find(request()->id),
            'kategoris' => Kategori::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->update($request->all());
        return redirect('/produk');
    }

    public function destroy($id)
    {
        $item = Product::find($id);
        $item->delete();
        return redirect('/produk');
    }
}
