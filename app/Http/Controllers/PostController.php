<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPost(){
        $id=1;
        return Post::with('author')->find($id);
    }
}
