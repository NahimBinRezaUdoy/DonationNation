<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $result['data'] = Volunteer::all();
        return view('admin.volunteer', $result);
    }

    public function manage_volunteer(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = Volunteer::where(['id' => $id])->get();

            $result['name'] = $arr['0']->name;
            $result['email'] = $arr['0']->email;
            $result['id'] = $arr['0']->id;
        } else {
            $result['name'] = '';
            $result['email'] = '';
            $result['id'] = 0;
        }
        return view('admin.manage_Volunteer', $result);
    }

    public function manage_Volunteer_process(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:volunteers,email,' . $request->post('id'),
        ]);

        if ($request->post('id') > 0) {
            $model = Volunteer::find($request->post('id'));
            $msg = "Volunteer Updated";
        } else {
            $model = new Volunteer();
            $msg = "Volunteer Inserted";
        }

        $model->name = $request->post('name');
        $model->email = $request->post('email');
        $model->save();

        $request->session()->flash('message', $msg);
        return redirect('admin/volunteer');
    }


    public function delete(Request $request, $id)
    {
        $model = Volunteer::find($id);
        $model->delete();

        $request->session()->flash('message', 'Volunteer Deleted');

        return redirect('admin/volunteer');
    }
}
