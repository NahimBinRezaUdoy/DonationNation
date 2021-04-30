<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DonateController extends Controller
{

    public function donate()
    {
        $donate = Donate::all();
        return view('donate', compact('donate'));
    }


    public function index()
    {
        $donate = Donate::all();
        return view('donate.index', compact('donate'));
    }

    public function create()
    {
        return view('donate.create');
    }


    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'amount' => 'required',
            'reason' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads_dionate', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Donate::create([
            'name' => $data['name'],
            'amount' => $data['amount'],
            'reason' => $data['reason'],
            'image' => $imagePath,
        ]);

        return redirect('/admin/donate/index');
    }


    public function show(Donate $donate)
    {
        $donates = Donate::all();
        return view('donate.show', [
            'donate' => $donate,
            'donates' => $donates,
        ]);
    }


    public function delete(Request $request, $id)
    {
        $model = Donate::find($id);
        $model->delete();

        $request->session()->flash('message', 'Donate Deleted');

        return redirect('admin/donate/index');
    }
}
