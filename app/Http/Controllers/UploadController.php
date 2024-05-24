<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploadfile;

class UploadController extends Controller
{
    public function create() {
        return view('images.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'mimes:png,jpeg,jpg'
        ]);

        if($request->hasfile('images')) {
            foreach($request->file('images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/product_images', $filename);
                $data[] = $filename;
            }
        }

        $file= new Uploadfile();
        $file->images = json_encode($data);
        $file->save();
        return back()->with('success', 'Your images has been successfully uploaded!');
    }
}