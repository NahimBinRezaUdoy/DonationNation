<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }


    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($data);

        return redirect()->back();
    }

    //admin part

    public function index()
    {
        $result['data'] = Contact::all();
        return view('admin.contact', $result);
    }


    public function delete(Request $request, $id)
    {
        $model = Contact::find($id);
        $model->delete();

        $request->session()->flash('message', 'contact Deleted');

        return redirect('admin/contact');
    }
}
