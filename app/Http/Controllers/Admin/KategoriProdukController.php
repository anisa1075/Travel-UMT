<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Http\Controllers\Controller;

class KategoriProdukController extends Controller
{
    public function index(){
        $kategoriProduk = KategoriProduk::all();
        return view('Admin.KategoriProduk.kategori', compact('kategoriProduk'));
    }

    public function tambahKategori(Request $request){
        KategoriProduk::create([
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->kategori)
        ]);

        return redirect()->route('index.kategori.produk')->with('Create', "Berhasil Tambah data kategori $request->kategori");
    }

    public function updateKategori(Request $request, $id){

        $kategoriProduk = KategoriProduk::findOrFail($id);
        $kategoriProduk->kategori = $request->kategori;
        $kategoriProduk->slug = Str::slug($request->kategori);

        $kategoriProduk->update();
        return redirect()->route('index.kategori.produk')->with('Update', "Data Kategori Produk $request->kategori Berhasil di Update");
    }

    public function deleteKategori($id){

        $kategoriProduk = KategoriProduk::findOrFail($id);

        $kategoriProduk->delete();
        return redirect()->back()->with('Delete', "Data Kategori Produk $kategoriProduk->kategori berhasil dihapus");
    }
}
