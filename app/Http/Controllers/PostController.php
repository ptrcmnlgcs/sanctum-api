<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts() {
        $post = Post::with('user')->get();
    
        return response()->json(['posts' => $post], 200);   
    }

    // create
    public function create(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new post
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id = Auth::id();
        $post->save();

        // Return success response
        return response()->json(['message' => 'Success'], 200);
    }

    // view
    public function view($id) {
        if ($post = Post::find($id)) {
            return response()->json(['post' => $post], 200);
        }

        return response()->json(['message' => 'Post not found'], 404);
    }

    // edit
    public function edit(Request $request, $id) {
        $post = Post::findOrFail($id);
        
        // Check if the authenticated user is the author of the post
        if ($post->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $post->update($request->only('title', 'description'));

        return response()->json(['message' => 'Post updated successfully'], 200);
    }

    // delete
    public function delete($id) {
        $post = Post::find($id);
        
        // Check if the authenticated user is the author of the post
        if ($post->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        if ($post) {
            $post->delete();

            return response()->json(['message' => 'Post deleted successfully'], 200);
        }

        return response()->json(['message' => 'Post not found'], 404);
    }
}
