<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);
        return view('blog.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}
