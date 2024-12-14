<?php

namespace The_Boys;

class User_model {
    private $table = 'boys_user'; 
    private $db;

    public function __construct() {
        $this->db = new \Database;
    }

    public function registerUser($data) {
        try {
            $this->db->query('INSERT INTO ' . $this->table . ' (email, fullname, username, password, role, date_created) VALUES (:email, :full_name, :username, :password, :role, NOW())');
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':full_name', $data['fullname']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':role', 'user');
    
            // Execute query and check if it was successful
            if ($this->db->execute()) {
                return true;
            } else {
                // Log the error if query fails
                error_log("Database insertion failed: " . implode(", ", $this->db->errorInfo()));
                return false;
            }
        } catch (\PDOException $e) {
            // Log error with more information
            error_log("Error in registerUser: " . $e->getMessage());
            return false;
        }
    }
    
    public function getUserByUsername($username) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username OR email = :username');
        $this->db->bind(':username', $username);
        $result = $this->db->single(); // Get the user (single record)
        return $result;
    }
    
    public function getUserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :id');
        $this->db->bind(':id', $id);
        $result = $this->db->single(); // Get the user (single record)
        return $result;
    }

    public function checkEmailExists($email) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $this->db->bind(':email', $email);
        $this->db->execute();

        if ($this->db->single()) {
            return true;
        }

        return false;
    }

    public function checkUsernameExists($username) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind(':username', $username);
        $this->db->execute();

        if ($this->db->single()) {
            return true;
        }
    
        return false;
    }
    
    
}
