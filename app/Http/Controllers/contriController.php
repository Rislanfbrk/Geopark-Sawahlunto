<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Photodest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class contriController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $destinasi = destination::paginate(2);
        return view('contri.destinasi.home', compact('destinasi'));
    }

    public function tambahDestinasi()
    {
        return view('contri.destinasi.tambah');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('cover')) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);
            $data = destination::create([
                'dest_name' => $request->dest_name,
                'dest_category' => $request->dest_category,
                'dest_location' => $request->dest_location,
                'dest_desc' => $request->dest_desc,
                'dest_cover' => $imageName,
            ]);
            $data->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['destination_id'] = $data->id;
                $request['destphoto'] = $imageName;
                $file->move(\public_path("/destinasi"), $imageName);
                Photodest::create($request->all());
            }
        }

        return redirect()->route('destinasic');
    }

    public function edit($id)
    {
        $destinasi = destination::findOrFail($id);
        return view('contri.destinasi.edit', compact('destinasi'));
    }

    public function update(Request $request, $id)
    {
        $destinasi = destination::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $destinasi->dest_cover)) {
                File::delete("cover/" . $destinasi->dest_cover);
            }
            $file = $request->file("cover");
            $destinasi->dest_cover = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/cover"), $destinasi->dest_cover);
            $request['cover'] = $destinasi->dest_cover;
        }
        $destinasi->update([
            'dest_name' => $request->dest_name,
            'dest_category' => $request->dest_category,
            'dest_location' => $request->dest_location,
            'dest_desc' => $request->dest_desc,
            'dest_cover' => $destinasi->dest_cover,
        ]);

        $photodests =  $destinasi->photodests;
        foreach ($photodests as $photo) {
            if (!$photo) {
                continue;
            }

            $img_id = 'image_' . $photo->id;

            if ($request->has($img_id)) {
                $newPhoto = $request[$img_id];
                $photoDest = Photodest::findOrFail($photo->id);
                $imageName = time() . '_' . $newPhoto->getClientOriginalName();
                $newPhoto->move(\public_path("/destinasi"), $imageName);
                $photoDest->update([
                    'destphoto' => $imageName,
                ]);
            }
        }

        return redirect()->route('destinasic');
    }

    public function delete($id)
    {
        $destination = destination::findOrFail($id);
        $photodests = Photodest::where("destination_id", $destination->id)->get();

        foreach ($photodests as $photo) {
            if (File::exists('destinasi/' . $photo->destphoto)) {
                File::delete("destinasi/" . $photo->destphoto);
            }
        }
        // destination::destroy($id);
        $destination->delete();
        return back();
    }

    public function search(Request $request)
    {
        $destinasi =  destination::where('dest_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dest_category', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dest_location', 'LIKE', '%' . $request->search . '%')
            ->paginate(2);
        $destinasi->withPath('search');
        $destinasi->appends($request->all());
        return view('contri.destinasi.home', compact('destinasi'));
    }
}
