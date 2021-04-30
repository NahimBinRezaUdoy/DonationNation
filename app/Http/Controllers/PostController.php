<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function blog(Post $posts)
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'description' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Post::create([
            'caption' => $data['caption'],
            'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return redirect('/admin/post/index');
    }

    //updated Single Page

    public function show(Post $post)
    {
        $posts = Post::all();
        return view('posts.show', [
            'post' => $post,
            'posts' => $posts,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $model = Post::find($id);
        $model->delete();

        $request->session()->flash('message', 'Post Deleted');

        return redirect('admin/post/index');
    }
}
