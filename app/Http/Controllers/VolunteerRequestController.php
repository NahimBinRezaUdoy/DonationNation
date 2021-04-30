<?php

namespace App\Http\Controllers;

use App\Models\volunteerRequest;
use Illuminate\Http\Request;

class VolunteerRequestController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        volunteerRequest::create($data);

        return redirect()->back();
    }


    //admin part

    public function index()
    {
        $result['data'] = volunteerRequest::all();
        return view('admin.volunteerRequest', $result);
    }


    public function delete(Request $request, $id)
    {
        $model = volunteerRequest::find($id);
        $model->delete();

        $request->session()->flash('message', 'VolunteerRequest Deleted');

        return redirect('admin/volunteerRequest');
    }
}
