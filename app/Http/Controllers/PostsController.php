<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostsController extends Controller
{

    public function __construct(Posts $posts)
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(/*Posts $posts*/ /*Tag $tag = null*/)
    {

        //return $tag->posts;
        //return session("message");

        //$posts = $posts->all();
        //$posts = (new Posts())->all();
        $posts = Post::latest()->filter(request(['month','year']))->get();
            
        return view('posts.index', compact('posts'));
    }

    /*public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }*/

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
        //dd(request(["title","body"])); //dump and die
        $this->validate(request(),
        [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(new Post(request(['title','body'])));

        /*Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->user()->id]);*/

        session()->flash("message","Your post has now been published!");

        return redirect('/');
    }
}
