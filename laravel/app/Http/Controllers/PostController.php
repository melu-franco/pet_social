<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

use Auth;

class PostController extends Controller
{



  public function createPost(Request $request)
  {
    $post = new Post();
    $user = Auth::user();
    //dd($user);
    $post->postContent = $request['postContent'];
    $post->user_id = $user->id;
    //dd($post);
    $post->save();

    return view('dashboard');
  }
}
