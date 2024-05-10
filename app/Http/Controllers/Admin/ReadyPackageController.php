<?php

namespace App\Http\Controllers\Admin;

use App\Models\ReadyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReadyPackageController extends Controller
{
    public function index(){
        $ready = ReadyPackage::all();
        return view('Admin.ReadyPackage.ready', compact('ready'));
    }

    public function formReady(){
        return view('Admin.ReadyPackage.tambahReady');
    }

    public function tambahReady(Request $request){
        ReadyPackage::create([
            'img' => $request->file('img')->store('img-ready'),
            'negara' => $request->negara,
        ]);

        return redirect()->route('index.ready.package')->with('Create', "Berhasil tambah data Ready Package");
    }

    public function editReady($id){
        $ready = ReadyPackage::findOrFail($id);
        return view('Admin.ReadyPackage.editReady', compact('ready'));
    }

    public function updateReady(Request $request, $id){
        $ready = ReadyPackage::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $ready->img);

            // update dengan gambar baru
            $ready->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $ready->negara = $request->negara;
            $ready->img = $request->file('img')->store('img-ready');

        }

        // menyimpan data perubahan
        $ready->update();

        return redirect()->route('index.ready.package')->with('Update', "Data Ready Package $request->negara Berhasil di Update");
    }

    public function deleteReady($id){
        $ready = ReadyPackage::findOrfail($id);
        $ready->delete();
        return redirect()->back()->with('Delete', "Data Ready Packgae $ready->negara  Berhasil di Hapus");
    }
}
