<?php

namespace The_Boys;

class Userprofile_model {
    private $table = 'boys_userprofile';
    private $db;

    public function __construct() {
        $this->db = new \Database;
    }

    public function getUserProfileById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function updateUserProfile($userId, $imagePath, $username, $fullname, $age, $ethnicity, $profileBio) {
        // Update the boys_user table for username and fullname
        $sqlUser = "UPDATE boys_user SET 
                    username = :username, 
                    fullname = :fullname 
                    WHERE user_id = :user_id";
        
        // Prepare and execute the update for the boys_user table
        $this->db->query($sqlUser);
        $this->db->bind(':username', $username);
        $this->db->bind(':fullname', $fullname);
        $this->db->bind(':user_id', $userId);   
        $this->db->execute();
    
        // Now update the boys_userprofile table for image_path, age, ethnicity, and profile_bio
        $sqlProfile = "UPDATE boys_userprofile SET 
                    image_path = :image_path, 
                    age = :age, 
                    ethnicity = :ethnicity, 
                    profile_bio = :profile_bio 
                    WHERE user_id = :user_id";
        
        // Prepare and execute the update for the boys_userprofile table
        $this->db->query($sqlProfile);
        $this->db->bind(':image_path', $imagePath);
        $this->db->bind(':age', $age);
        $this->db->bind(':ethnicity', $ethnicity);
        $this->db->bind(':profile_bio', $profileBio);
        $this->db->bind(':user_id', $userId);
    
        return $this->db->execute();
    }

    // Separate method for uploading the profile image
    public function uploadProfileImage($file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/../../../public/uploads/The_Boys/userprofile/';
            $fileName = uniqid() . '_' . basename($file['name']);
            $targetFilePath = $uploadDir . $fileName;
    
            // Allowed MIME types for images
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
    
            // Use getimagesize() to validate MIME type
            $imageInfo = getimagesize($file['tmp_name']);
            if ($imageInfo && in_array($imageInfo['mime'], $allowedMimeTypes)) {
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                    return $fileName;
                } else {
                    throw new \Exception("Error moving the uploaded file.");
                }
            } else {
                throw new \Exception("Invalid file type. Only JPG, PNG, and GIF files are allowed.");
            }
        } else {
            throw new \Exception("File upload error.");
        }
    }

    // Method to update the profile image and other details
    public function updateProfileWithImage($userId, $file, $username, $fullname, $age, $ethnicity, $profileBio) {
        // First, upload the profile image and get its path
        $imagePath = $this->uploadProfileImage($file);

        // Now update the user profile with the new image path and other data
        return $this->updateUserProfile($userId, $imagePath, $username, $fullname, $age, $ethnicity, $profileBio);
    }

    public function updateUserProfileWithoutImage($userId, $username, $fullname, $age, $ethnicity, $profileBio) {
        // Update the boys_user table for username and fullname
        $sqlUser = "UPDATE boys_user SET 
                    username = :username, 
                    fullname = :fullname 
                    WHERE user_id = :user_id";
        
        // Prepare and execute the update for the boys_user table
        $this->db->query($sqlUser);
        $this->db->bind(':username', $username);
        $this->db->bind(':fullname', $fullname);
        $this->db->bind(':user_id', $userId);
        $this->db->execute();
    
        // Now update the boys_userprofile table for age, ethnicity, and profile_bio (no image path)
        $sqlProfile = "UPDATE boys_userprofile SET 
                    age = :age, 
                    ethnicity = :ethnicity, 
                    profile_bio = :profile_bio 
                    WHERE user_id = :user_id";
        
        // Prepare and execute the update for the boys_userprofile table
        $this->db->query($sqlProfile);
        $this->db->bind(':age', $age);
        $this->db->bind(':ethnicity', $ethnicity);
        $this->db->bind(':profile_bio', $profileBio);
        $this->db->bind(':user_id', $userId);
    
        return $this->db->execute();
    }
    
}

