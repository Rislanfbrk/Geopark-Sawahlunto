<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\PhotoBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function indexBerita()
    {
        $user = Auth::user()->id;
        $berita = Berita::paginate(2);
        return view('admin.berita.home', compact('berita'));
    }

    public function tambahBerita()
    {
        return view('admin.berita.tambah');
    }

    public function storeBerita(Request $request)
    {
        $coverImageName = null;
        if ($request->hasFile('berita_cover')) {
            $coverFile = $request->file('berita_cover');
            $coverImageName = time() . '_' . $coverFile->getClientOriginalName();
            $coverFile->move(public_path('cover/'), $coverImageName);
        }

        $data = Berita::create([
            'berita_name' => $request->input('berita_name'),
            'berita_location' => $request->input('berita_location'),
            'berita_desc' => $request->input('berita_desc'),
            'berita_cover' => $coverImageName,
        ]);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                PhotoBerita::create([
                    'berita_id' => $data->id,
                    'beritaphoto' => $imageName,
                ]);

                $file->move(public_path("/berita"), $imageName);
            }
        }
        return redirect()->route('berita');
    }

    public function editBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function updateBerita(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $berita->berita_cover)) {
                File::delete("cover/" . $berita->berita_cover);
            }

            $file = $request->file("cover");
            $berita->berita_cover = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("/cover"), $berita->berita_cover);
        }

        $berita->update([
            'berita_name' => $request->input('berita_name'),
            'berita_location' => $request->input('berita_location'),
            'berita_desc' => $request->input('berita_desc'),
            'berita_cover' => $berita->berita_cover,
        ]);

        $photoberita = $berita->photoberitas;
        if (!is_null($photoberita)) {
            foreach ($photoberita as $photo) {
                if (!$photo) {
                    continue;
                }

                $img_id = 'image_' . $photo->id;
                if ($request->has($img_id)) {
                    $newPhoto = $request->file($img_id);
                    $photoBerita = PhotoBerita::findOrFail($photo->id);
                    $imageName = time() . '_' . $newPhoto->getClientOriginalName();
                    $newPhoto->move(public_path("/berita"), $imageName);
                    $photoBerita->update([
                        'destphoto' => $imageName,
                    ]);
                }
            }
        }

        return redirect()->route('berita');
    }

    public function deleteBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $photoberita = PhotoBerita::where("berita_id", $berita->id)->get();

        foreach ($photoberita as $photo) {
            if (File::exists('berita/' . $photo->beritaphoto)) {
                File::delete("berita/" . $photo->beritaphoto);
            }
        }

        $berita->delete();
        return back();
    }

    public function searchBerita(Request $request)
    {
        $berita = Berita::where('berita_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('berita_location', 'LIKE', '%' . $request->search . '%')
            ->paginate(2);
        $berita->appends($request->all());
        return view('admin.berita.home', compact('berita'));
    }
}
