<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts() {
        $post = Post::with('user')->get();
    
        return response()->json(['posts' => $post], 200);   
    }

    // create
    public function create() {
        
    }
    // edit
    public function edit() {
        
    }
    // delete
    public function delete() {
        
    }
}
