<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cause;
use App\Models\Contact;
use App\Models\Donate;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.login');
        }
        return view('admin.login');
    }


    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');


        $result = Admin::where([
            'email' => $email
        ])->first();

        if ($result) {
            if (Hash::check($request->post('password'), $result->password)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            } else {
                $request->session()->flash('error', 'Please enter valid password');
                return redirect('admin');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
    }

    public function dashboard()
    {
        $causes = Cause::all();
        $contacts = Contact::all();
        $donates = Donate::all();
        $events = Event::all();
        $gallerys = Gallery::all();
        $posts = Post::all();
        $volunteers = Volunteer::all();


        return view('admin.dashboard', [
            'causes' => $causes,
            'contacts' => $contacts,
            'donates' => $donates,
            'events' => $events,
            'gallerys' => $gallerys,
            'posts' => $posts,
            'volunteers' => $volunteers,
        ]);
    }

    public function updatepassword()
    {
        $r = Admin::find(1);
        $r->password = Hash::make('udoy');
        $r->save();
    }
}
