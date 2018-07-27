<?php

class Post {

    private $id;
    private $user_id;
    private $created_at;
    private $likes;
    private $tags;

    public function savePost() {
        //
    }
 
    public function sharePost() {
        //
    }

    public function deletePost() {
        //
    }

    public function commentPost() {
        //
    }
 
    public function likePost($user_id) {
        //select count * from likes where post_id = && user_id = $user_id
        //if count 0
          //  guardo like
          //  return true
       // return false
        
    }
}