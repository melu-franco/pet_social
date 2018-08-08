<?php

    require_once('User.php');

    class DB {
        
        protected $conn;

        public function __construct() {
            $servername = "localhost";
            $dbname = "little_paws";
            $username = "root";
            $password = "root";
    
            try {
                $this->conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4;port=3306", $username, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // var_dump($conn);
                // exit;
            } catch (PDOException $e) {
                echo "Hubo un problema con la conexión: " . $e->getMessage();
            }
        }
        
        public function saveUser(User $user) {
            $query = "INSERT INTO users VALUES (default, :fullname, :username, :email, :password, null)";
            // var_dump($user);
            // exit;  
           
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':fullname', $user->getFullName());
            $stmt->bindValue(':username', $user->getUsername());
            $stmt->bindValue(':email', $user->getEmail());
            $stmt->bindValue(':password', $user->getPassword());
  

            $stmt->execute();


            $id = $this->conn->lastInsertId();
            $user->setId($id);

            return $user;
        }

        public function searchUser($username) {
            $query = 'SELECT * FROM users WHERE username = :username';

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':username', $username);
            $stmt->execute();

            $userFound = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($userFound) {
                $user = new User($userFound['id'], $userFound['fullname'],$userFound['username'],$userFound['email'], $userFound['password'],$userFound['profilephoto']);
                return $user;
            } else {
                return null;
            }
        }

        public function searchEmail($email) {
            $query = 'SELECT * FROM users WHERE email = :email';

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            $userFound = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($userFound) {
                $user = new User($userFound['id'], $userFound['fullname'],$userFound['username'],$userFound['email'], $userFound['password'],$userFound['profilephoto']);
                return $user;
            } else {
                return null;
            }
        }
        
        public function fetchBase()
        {
            $query = 'SELECT * FROM users';

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            
            $usersFound = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $usersFoundReturn = [];
     
            foreach ($usersFound as $user):
                $usersFoundReturn[] = new User($user['id'],$user['fullname'],$user['username'],$user['email'], $user['password'], $user['profilephoto']);
            endforeach;

            return $usersFoundReturn;
        
        }
    }
    
?>