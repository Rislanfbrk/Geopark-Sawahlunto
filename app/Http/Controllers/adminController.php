<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminRequest;
use App\Models\dest_photo;
use App\Models\destination;
use App\Models\Photodest;
use App\Services\admin\adminServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class adminController extends Controller
{
    private adminServices $adminServices;
    public function __construct(adminServices $adminServices)
    {
        $this->adminServices = $adminServices;
    }

    public function index()
    {
        $user = Auth::user()->id;
        $destinasi = destination::all();
        // $photodests = Photodest::all();
        // dd($photodests);
        return view('admin.destinasi.home', compact('destinasi'));
    }

    public function tambahDestinasi()
    {
        return view('admin.destinasi.tambah');
    }

    public function store(Request $request)
    {

        if($request->hasFile('cover')){
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

        return redirect()->route('destinasi');
    }

    public function edit($id)
    {
        $destinasi = destination::findOrFail($id);
<<<<<<< HEAD
=======
        // $photodests = Photodest::findOrFail($id);
        // $photo = dest_photo::find($id);
        // $posts=Post::findOrFail($id);
        // return view('edit')->with('posts',$posts);
        // dd($destinasi,$photo);
>>>>>>> 7b23fdb3d960eb38c6da14f597fe6dce946d7aa1
        return view('admin.destinasi.edit', compact('destinasi'));
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

<<<<<<< HEAD
        $photodests =  $destinasi->photodests;
=======
        $photodests = $destinasi->photodests;
>>>>>>> 7b23fdb3d960eb38c6da14f597fe6dce946d7aa1
        foreach ($photodests as $photo) {
            if (!$photo) {
                continue;
            }
<<<<<<< HEAD

            $img_id = 'image_' . $photo->id;

=======
            $img_id = 'image_' . $photo->id;
            
>>>>>>> 7b23fdb3d960eb38c6da14f597fe6dce946d7aa1
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

        return redirect()->route('destinasi');
    }

    public function delete($id){
        $destination=destination::findOrFail($id);
        $photodests=Photodest::where("destination_id",$destination->id)->get();

        foreach ($photodests as $photo) {
            if(File::exists('destinasi/'. $photo->destphoto)){
                File::delete("destinasi/".$photo->destphoto);
            }
        }
        // destination::destroy($id);
        $destination->delete();
        return back();
    }
}
