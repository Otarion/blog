<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

public function posts() {
    foreach (Post::all() as $posts) {
        return $this -> view('index.html', compact('posts'));
    }
}
public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}