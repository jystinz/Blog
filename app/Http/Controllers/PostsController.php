<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store()
    {

        $this->validate(\request(), [
            'title' => 'required|min:6|max:60',
            'body' => 'required|min:6'
        ]);

//        Post::create(\request()->all());

        // แบบเก่าก่อนจะมี auth
//        Post::create(\request(['title', 'body']));
        // แบบใหม่หลังมี auth
        auth()->user()->publish(
            new Post(\request(['title', 'body']))
        );

//        Post::create([
//            'title' => \request('title'),
//            'body' => \request('body')
//        ]);

//        // Create a new post using the request data.
//        $post = new Post;
//
//        $post->title = \request('title');
//        $post->body = \request('body');
//
//        // Save it to the database.
//        $post->save();

        // And them redirect to the home page.
        return redirect('/');
    }
}
