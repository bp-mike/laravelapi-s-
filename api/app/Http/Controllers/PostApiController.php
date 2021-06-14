<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostApiController extends Controller
{
    //____ get app items from db
    public function getall(){
        return Post::all();
    }

    public function store(){
        // _____validate (not a must just for validaion)
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        return Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);
    }

    public function update(Post $post){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        
    
       $success = $post->update([
    
           'title' => request('title'),
           'content' => request('content'),
       ]);
    
       return [
           'success' => $success
       ];
    }

    public function destroy(Post $post){
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
