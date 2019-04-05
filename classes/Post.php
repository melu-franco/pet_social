<?php

require_once ('../loader.php');
require_once ('User.php');

class Post {

    private $id;
    public $user_id;
    private $content;
    private $created_at;
    private $updated_at;
    private $likes;

    public function __construct($user_id, $content,$created_at) {
        $this->user_id = $user_id;
        $this->content = $content;
        $this->created_at = $created_at;
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


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
 
    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
        return $this;
    }
}