<?php

/**
 * User model data access and manipulation (DAM) class.
 *
 * @author jam
 * @version 171117
 */
class UserDAM extends DAM {

    // Database connection is inherited from the parent.
    function __construct() {
        parent::__construct();
    }

    /**
     * Read the User object from the database with the specified ID
     * @param type $userId the user's unique user ID (probably email)
     * @return \User the resulting User object - null if user is
     * not in the database.
     */
    public function readUser($userEmail) {
        $query = 'SELECT * FROM users
              WHERE userEmail = :userEmail';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':userEmail', $userEmail);
        $statement->execute();
        $userDB = $statement->fetch();
        $statement->closeCursor();
        if ($userDB == null) {
            return null;
        } else {
            return new User($this->mapColsToVars($userDB));
        }
    }

    /**
     * Write the specified user to the database. If the user is not
     * in the database, the object is added. If the user is already in the
     * database, the object is updated (excluding password).
     * @param type $user the User object to be written.
     */
    public function writeUser($user) {

        // Check to see if the user is already in the database.
        $query = 'SELECT userID FROM users
              WHERE userID = :userID';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':userID', $user->id);
        $statement->execute();
        $userDB = $statement->fetch();
        $statement->closeCursor();
        if ($userDB == null) {

            // Add a new user to the database
            $query = 'INSERT INTO users
                (userID, userEmail, lastName, firstName, password)
              VALUES
                (:userID, :userEmail, :lastName, :firstName, :password)';
            $statement = $this->db->prepare($query);
            $this->bindValues($user, $statement);
            $statement->execute();
            $statement->closeCursor();
        } else {

            // Update an existing administrator.
            $query = 'UPDATE users
              SET userEmail = :userEmail, lastName = :lastName, firstName = :firstName, password = :password
              WHERE userID = :userID';
            $statement = $this->db->prepare($query);
            $this->bindValues($user, $statement);
            $statement->execute();
            $statement->closeCursor();
        }
    }

    public function newUserCreate($user){
        $query = 'SELECT userEmail FROM users WHERE userEmail = :userEmail';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':userEmail',$user->userEmail);
        $statement->execute();
        $userDB = $statement->fetch();
        $statement->closeCursor();
        if($userDB == null){
            //no user by the userEmail, OK to create
            $query = 
                    'INSERT INTO users (firstName, lastName, userEmail, password)
                    VALUES(:firstName, :lastName, :userEmail, :password)';
            $statement = $this->db->prepare($query);
            $this->bindValues($user,$statement);
            $statement->execute();
            $statement->closeCursor();
        }else{
            //user already exists
            return "user already exists with that email";
        }
    }

    /**
     * Delete the specified User object from the database.
     * 
     * @param type $user the User object to be deleted.
     */
    public function deleteUser($user) {
        $this->deleteUserById($user->id);
    }

    /**
     * Delete the User object from the database with the specified username.
     * 
     * @param type $userId the ID of the User to be deleted.
     */
    public function deleteUserById($userId) {
        $query = 'DELETE FROM users
              WHERE userID = :userID';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':userID', $userId);
        $statement->execute();
        $statement->closeCursor();
    }

    // Translate database columnames to object instance variable names
    private function mapColsToVars($colArray) {
        $varArray = array();
        foreach ($colArray as $key => $value) {
            if ($key == 'user_id') {
                $varArray ['user_id'] = $value;
            } else if ($key == 'lastName') {
                $varArray ['lastName'] = $value;
            } else if ($key == 'firstName') {
                $varArray ['firstName'] = $value;
            } else if ($key == 'password') {
                $varArray ['password'] = $value;
            } else if ($key == 'userEmail') {
                $varArray ['userEmail'] = $value;
            }
        }
        return $varArray;
    }

    // Binds object instance variables to a prepared statement.
    private function bindValues($user, $statement) {
        // $statement->bindValue(':user_id', $user->user_id);
        $statement->bindValue(':lastName', $user->lastName);
        $statement->bindValue(':firstName', $user->firstName);
        $statement->bindValue(':password', $user->password);
        $statement->bindValue(':userEmail', $user->userEmail);
    }
}
