<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

use Auth;

class PostController extends Controller
{

  public function getDashboard()
  {
      $posts = Post::orderBy('created_at','desc')->get();
      return view('dashboard', ['posts' => $posts]);
  }

  public function createPost(Request $request)
  {
    //$this->validate($request,[
    //  'postContent'=>'required|max:2'
    //]);
    $post = new Post();
    $user = Auth::user();
    //dd($user);
    $post->postContent = $request['postContent'];
    $post->user_id = $user->id;
    //dd($post);
    $post->save();

    return redirect()->route('dashboard');
  }

  public function getDeletePost($post_id)
  {
    $post = Post::where('id',$post_id)->first();
    if (Auth::user()!= $post->user){
      return redirect()->back();
    };
    $post->Delete();

    return redirect()->route('dashboard');
  }
}
