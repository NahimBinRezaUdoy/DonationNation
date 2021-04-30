<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function gallery()
    {
        $galleryImages = Gallery::all();
        return view('gallery', compact('galleryImages'));
    }


    public function index()
    {
        $galleryImages = Gallery::all();
        return view('gallery.index', compact('galleryImages'));
    }

    public function create()
    {
        return view('gallery.create');
    }


    public function store()
    {
        $data = request()->validate([
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploadsGallery', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Gallery::create([
            'image' => $imagePath,
        ]);

        return redirect('/admin/gallery/index');
    }


    public function delete(Request $request, $id)
    {
        $model = Gallery::find($id);
        $model->delete();

        $request->session()->flash('message', 'Image Deleted Successfully');

        return redirect('/admin/gallery/index');
    }
}
