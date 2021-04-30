<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Donate;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $causes = Cause::all();
        $posts = Post::all();
        $events = Event::all();


        return view('home', [
            'causes' => $causes,
            'posts' => $posts,
            'events' => $events,
        ]);
    }


    public function about()
    {
        return view('about');
    }
}
