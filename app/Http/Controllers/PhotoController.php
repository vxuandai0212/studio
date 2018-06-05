<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        return Photo::all();
    }

    public function show(Photo $photo)
    {
        return view('admin.modal.photo.edit', ['photo' => $photo]);
    }

    public function store(Request $request)
    {
        $photoName = time().'.'.$request->image->getClientOriginalExtension();
        $photo = new Photo;
        $photo->category_id = $request->select;
        $photo->name = $request->title;
        $photo->url_image = "assets/img/upload/".$photoName;
        if($request->slideshow == null){
            $photo->is_slide_show = false;
        }else{
            $photo->is_slide_show = true;
        }
        $photo->save();
        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->image->move(public_path('assets/img/upload'), $photoName);

        return response()->json($photo, 201);
    }

    public function update(Request $request, Photo $photo)
    {
        $photo->update($request->all());

        return response()->json($photo, 200);
    }

    public function delete(Photo $photo)
    {
        $photo->delete();

        return response()->json(null, 204);
    }
}
