<?php

class Friendship {
  private $id;
  private $userOne;
  private $userTwo;
  private $status = 0;
  private $actionUserId;
      
  public function getUserOne() {
    return $this->userOne;
  }
  
  public function setUserOne(User $userOne) {
    $this->userOne = $userOne;
  }
  
  public function getUserTwo() {
    return $this->userTwo;
  }
  
  public function setUserTwo(User $userTwo) {
    $this->userTwo = $userTwo;
  }
  
  public function getStatus() {
    return $this->status;
  }
  
  public function setStatus($status) {
    $this->status = $status;
  }
  
  public function getActionUserId() {
    return $this->actionUserId;
  }
  
  public function setActionUserId($actionUserId) {
    $this->actionUserId = $actionUserId;
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

  public function arrayToRelationship($row, $dbCon) {
    if (!empty($row)) {
      if (isset($row['user_one_id']) && isset($row['user_two_id'])) {
        $resultObj = $dbCon->query('SELECT * FROM `users` WHERE `users`.`user_id` IN ('
          . (int)$row['user_one_id'] . ', ' . (int)$row['user_two_id'] . ')');
        
        $usersArr = array();
        while($record = $resultObj->fetch_assoc()) {
          $usersArr[] = $record;
        }
        
        $userOne = new User();
        $userTwo = new User();
        
        // Check which user id is lesser.
        if ($row['user_one_id'] < $row['user_two_id']) {
          $userOne->arrToUser($usersArr[0]);
          $userTwo->arrToUser($usersArr[1]);
        } else {
          $userOne->arrToUser($usersArr[1]);
          $userTwo->arrToUser($usersArr[0]);
        }
        
        $this->setUserOne($userOne);
        $this->setUserTwo($userTwo);
      }
      
      isset($row['status']) ? $this->setStatus((int)$row['status']) : '';
      isset($row['action_user_id']) ? 
        $this->setActionUserId((int)$row['action_user_id']) : '';
    }
  }
}