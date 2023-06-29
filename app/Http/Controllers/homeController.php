<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Berita;
use App\Models\beritabaru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home()
    {
        $home = Auth::user();
        return view('home', compact('home'));
    }

    // public function destinasi() {
    //     $destinasi = destination::paginate(2);
    //     return view('destinasi', compact('destinasi'));
    // }

    public function admin()
    {
        return view('admin.home');
    }
    public function contri()
    {
        return view('contri.home');
    }

    public function destinasi()
    {
        $destinasi = destination::paginate(6);
        return view('destinasi', compact('destinasi'));
    }

    public function berita()
    {
        $berita = Berita::paginate(6);
        return view('berita', compact('berita'));
    }

    public function detail($id)
    {
        $destinasi = destination::findOrFail($id);
        return view('detaildestinasi', compact('destinasi'));
    }

    public function detailBerita($id)
    {
        $berita = berita::findOrFail($id);
        return view('detailberita', compact('berita'));
    }

    public function filter(Request $request)
    {
        $destinasi = destination::where('dest_category', 'LIKE', '%' . $request->selectcategory . '%')
            ->paginate(6);
        $destinasi->withPath('filter');
        $destinasi->appends($request->all());
        return view('destinasi', compact('destinasi'));
    }

    public function filterBerita(Request $request)
    {

        $berita =  berita::where('berita_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('berita_desc', 'LIKE', '%' . $request->search . '%')
            ->orWhere('berita_location', 'LIKE', '%' . $request->search . '%')
            ->orWhere('berita_cover', 'LIKE', '%' . $request->search . '%')
            ->paginate(6);

        $berita->withPath('filter');
        $berita->appends($request->all());
        return view('berita', compact('berita'));
    }

    public function team()
    {
        return view('card');
    }
}
