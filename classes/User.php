<?php

class User {
   private $id;
   private $fullname;
   private $username;
   private $email;
   private $password;
   private $profilephoto;

   public function __construct($id = null, $fullname, $username, $email, $password, $profilephoto = null) {
        if ($id == null) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $this->password = $password;
        }
        $this->fullname = $fullname;
        $this->username = $username;
        $this->email = $email;
        $this->profilephoto= $profilephoto;
        $this->id = $id;
   }

   public function getStatus() {

   }

   public function getFriends() {

   }

   public function sendFriendRequest() {

   }

   public function acceptFriendRequest() {

   }

//    public function cancelFriendRequest() {

//     }

   public function deleteFriends() {

    }

   public function changeSettings() {
                    
    }

   public function deleteUser() {
            
   }

    public function getId() {
       return $this->id;
    }

    public function setId($id) {
       $this->id = $id;
       return $this;
    }

   public function getFullName() {
      return $this->fullname;
   }

   public function setFullName($name) {
      $this->fullname = $fullname;
      return $this;
   }

   public function getUsername() {
      return $this->username;
   }

   public function setUsername($username) {
      $this->username = $username;
      return $this;
   }

   public function getEmail() {
      return $this->email;
   }

   public function setEmail($email) {
      $this->email = $email;
      return $this;
   }

   public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /*
    public function getProfilePhoto(){
       return $this->profilephoto;
    }
   
    public function setProfilePhoto($profilephoto){
       $this->profilephoto = $profilephoto;
       return $this;
    }

   public function saveProfilePhoto($username) {
        //SI la foto de perfil sube sin error
        if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
        {
            //ENTRA a esta logica
            $nombre=$_FILES["avatar"]["name"];
            $archivo=$_FILES["avatar"]["tmp_name"];

            $ext = pathinfo($nombre, PATHINFO_EXTENSION);
            //SI la foto no es JPG o JPEG
            if ($ext != "jpg" && $ext != "jpeg") {
                //Dame error
                return "Error";
            }

            $miArchivo = dirname(__FILE__);
            $miArchivo = $miArchivo . "/../img/";
            $miArchivo = $miArchivo . $this->getUsername() . "." . $ext;

            move_uploaded_file($archivo, $miArchivo);
        }
    }
    */


   /**
    * Get the value of profilephoto
    */ 
   public function getProfilephoto()
   {
      return $this->profilephoto;
   }

   /**
    * Set the value of profilephoto
    *
    * @return  self
    */ 
   public function setProfilephoto($profilephoto)
   {
      $this->profilephoto = $profilephoto;

      return $this;
   }
}



?>