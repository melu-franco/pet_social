<?php

require_once('DB.php');

class Auth {
    public function __construct() {
        session_start();

        if(!isset($_SESSION['loggedin']) && isset($_COOKIE['loggedin'])) {
            $_SESSION['loggedin'] = $_COOKIE['loggedin'];
        }
    }

    public function login($username) {
        $_SESSION['loggedin'] = $username;
    }

    public function loginControl() {
        return isset($_SESSION['loggedin']);
    }

    public function userLogged(DB $db) {
        if ($this->loginControl()) {
            $username = $_SESSION['loggedin'];
            return $db->searchUser($username);
        } else {
            return null;
        }
    }

    public function logout() {
        session_destroy();
        setcookie("loggedin", "", -1);
    }


}

?>