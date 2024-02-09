<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
use App\Models\PostController;

class Post extends Model {

public function posts () {
    foreach (Post::all() as $posts) {
        echo $posts->name;
    }
}

}