<?php

    require_once('User.php');

    class DB {
        
        protected $db;

        public function __construct() {
            $server = "localhost";
            $dbname = "little_paws";
            $username = "root";
            $password = "";
    
            try {
                $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Hubo un problema con la conexión: " . $e->getMessage();
            }
        }
        
        function saveUser(User $user) {
            $query = 'INSERT INTO users VALUES(default, :username, :password)';

            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':username', $user->getUsername());
            $stmt->bindValue(':password', $password->getPassword());
            $stmt->execute();

            $id = $this->db->lastInsertId();
            $user->setId($id);

            return $user;
        }

        function searchUser($username) {
            $query = 'SELECT * FROM users WHERE username = :username';

            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':username', $username);
            $stmt->execute();

            $userFound = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($userFound) {
                $user = new User($userFound['username'],$userFound['email'], $userFound['password'], $userFound['id']);
                return $user;
            } else {
                return null;
            }
        }
        
        function fetchBase()
        {
            $query = 'SELECT * FROM users';

            $stmt = $this->db->prepare($query);
            $stmt->execute();
            
            $usersFound = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $usersFoundReturn = [];
     
            foreach ($usersFound as $user):
                $usersFoundReturn[] = new User($user['username'],$user['email'], $user['password'], $user['id']);
            endforeach;

            return $usersFoundReturn;
        
        }
    }
    
?>