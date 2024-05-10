<?php

namespace App\Http\Controllers\Front;

use App\Models\Galeri;
use App\Models\OpenCome;
use App\Models\Destinasi;
use App\Models\OpenSelesai;
use App\Models\ReadyPackage;
use Illuminate\Http\Request;
use App\Models\TestimoniTeks;
use App\Models\KategoriGaleri;
use App\Models\TestimoniVideo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        $testimoni = TestimoniTeks::all();
        $testimoniVideo = TestimoniVideo::all();
        $kategori = KategoriGaleri::all();
        return view('Front.baseFront', compact('destinasi', 'testimoni', 'testimoniVideo', 'kategori'));
    }




    public function kategori($slug){
        $kategori = KategoriGaleri::all();
        $kategoriGaleri = KategoriGaleri::where('slug', $slug)->first();
        $galeri = Galeri::where('kategori_galeri', $kategoriGaleri->id)->get();
        return view('Front.Page.galeri', compact('galeri', 'kategori'));
    }

    public function ready()
    {   
        $kategori = KategoriGaleri::all();
        $ready = ReadyPackage::all();
        return view('Front.Page.ready', compact('ready', 'kategori'));
    }

    public function openTrip()
    {   
        $kategori = KategoriGaleri::all();
        $come = OpenCome::all();
        $selesai = OpenSelesai::all();
        return view('Front.Page.openTrip', compact('come', 'selesai', 'kategori'));
    }

    public function tailorMade()
    {   
        $kategori = KategoriGaleri::all();
        return view('Front.Page.tailor', compact('kategori'));
    }

    public function detailDestinasi()
    {   
        $kategori = KategoriGaleri::all();
        $destinasi = Destinasi::all();
        return view('Front.Page.detailDestinasi', compact('destinasi', 'kategori'));
    }

    public function descDestinasi($id)
    {   
        $kategori = KategoriGaleri::all();
        $negara = Destinasi::all();
        $desc = Destinasi::where('id', $id)->first();
        return view('Front.Page.descDestinasi', compact('desc', 'negara', 'kategori'));
    }

    public function viewDestinasi()
    {   
        $kategori = KategoriGaleri::all();
        $destinasi = Destinasi::all();
        return view('Front.Page.detailDestinasi', compact('destinasi', 'kategori'));
    }

    public function detailItinerary($id)
    {   
        $itinerary = OpenCome::where('id', $id)->first();
        return view('Front.Page.detail', compact('itinerary'));
    }

    public function hubungiKami()
    {   
        $kategori = KategoriGaleri::all();
        return view('Front.Page.hubungiKami', compact('kategori'));
    }

    public function searchDestinasi(Request $request){
        $kategori = KategoriGaleri::all();
        $negara = Destinasi::all();
        $desc = Destinasi::where('id', $request->id)->first();
        if($request->has('search')){
            $destinasi = Destinasi::where('negara', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $destinasi = Destinasi::all();
        }
        return view('Front.Page.descDestinasi', compact('destinasi', 'desc', 'negara', 'kategori'));
    }
}
