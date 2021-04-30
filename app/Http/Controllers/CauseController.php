<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CauseController extends Controller
{

    public function causes()
    {
        $causes = Cause::all();
        return view('causes', compact('causes'));
    }


    public function index()
    {
        $causes = Cause::all();
        return view('causes.index', compact('causes'));
    }

    public function create()
    {
        return view('causes.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'description' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploadsCauses', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Cause::create([
            'caption' => $data['caption'],
            'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return redirect('/admin/cause/index');
    }


    public function show(Cause $cause)
    {
        $causes = Cause::all();
        return view('causes.show', [
            'cause' => $cause,
            'causes' => $causes,
        ]);
    }


    public function delete(Request $request, $id)
    {
        $model = Cause::find($id);
        $model->delete();

        $request->session()->flash('message', 'Cause Deleted');

        return redirect('admin/cause/index');
    }
}
