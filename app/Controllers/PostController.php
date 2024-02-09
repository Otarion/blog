<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return $this -> view('post.html', ['post' => $post]);
    }
    public function index()
    {
        $posts = Post::all();
        
        return $this ->view('index.html', ['posts' => $posts]);
    }
    
}