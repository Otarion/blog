<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return $this ->view('index', ['posts' => $posts]);
    }
}