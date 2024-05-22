<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class GalleryController extends Controller
{
    public function showGallery()
    {
        $photos = Photo::all();
        return view('gallery', compact('photos'));
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('photo')->store('public/photos');

        Photo::create([
            'image_path' => $imagePath,
        ]);

        return redirect('/gallery')->with('success', 'Foto erfolgreich hochgeladen!');
    }
}
