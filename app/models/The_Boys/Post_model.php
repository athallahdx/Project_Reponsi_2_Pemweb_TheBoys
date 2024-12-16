<?php
namespace The_Boys;

use PDO;
use PDOException;

class post_model {
    private $table = 'boys_post';
    private $db;

    public function __construct() {
        $this->db = new \Database;
    }

    public function getAllPosts() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY date_created DESC');
        return $this->db->resultSet();
    }

    public function getPostById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addPost($data, $image) {
        $query = "INSERT INTO " . $this->table
                . " (image_path, content, date_created, edited, date_edited, user_creator_id)"
                . " VALUES (:image_path, :content, NOW(), :edited, :date_edited, :user_creator_id)";
        $this->db->query($query);
        $this->db->bind(':image_path', $image);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':edited', 0, PDO::PARAM_BOOL);
        $this->db->bind(':date_edited', NULL);
        $this->db->bind(':user_creator_id', $data['user_creator_id']);
        $this->db->execute();
    }

    public function uploadPostImage($file) {
        try {
            if ($file['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../../public/uploads/The_Boys/post/';
                $fileName = uniqid() . '_' . basename($file['name']);
                $targetFilePath = $uploadDir . $fileName;

                $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

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
        } catch (\Exception $e) {
            error_log("File Upload Error: " . $e->getMessage());
            throw $e;
        }
    }

    public function addPostWithImage($data, $file) {
        try {
            $imagePath = $this->uploadPostImage($file);
            return $this->addPost($data, $imagePath);
        } catch (\Exception $e) {
            error_log("Error in addPostWithImage: " . $e->getMessage());
            throw $e; // Optionally rethrow for higher-level handling
        }
    }

    public function addPostWithoutImage($data) {
        try {
            $query = "INSERT INTO " . $this->table
                    . " (image_path, content, date_created, edited, date_edited, user_creator_id)"
                    . " VALUES (:image_path, :content, NOW(), :edited, :date_edited, :user_creator_id)";
            $this->db->query($query);
            $this->db->bind(':image_path', NULL);
            $this->db->bind(':content', $data['content']);
            $this->db->bind(':edited', 0, PDO::PARAM_BOOL);
            $this->db->bind(':date_edited', NULL);
            $this->db->bind(':user_creator_id', $data['user_creator_id']);
            $this->db->execute();
        } catch (PDOException $e) {
            error_log("Database Error in addPostWithoutImage: " . $e->getMessage());
            throw new \Exception("Unable to create the post.");
        }
    }

    public function updatePost($data) {
        $query = "UPDATE " . $this->table
                . " SET headline = :headline, content = :content, edited = :edited, date_edited = NOW() 
                  WHERE post_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $data['post_id']);
        $this->db->bind(':headline', $data['headline']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':edited', $data['edited']);
        return $this->db->execute();
    }

    public function deletePost($post_id) {
        $query = "DELETE FROM " . $this->table . " WHERE post_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $post_id);
        return $this->db->execute();
    }

    public function getPostByUserId($user_creator_id) {
        $this->db->query('SELECT * FROM ' . $this->table
                . ' WHERE user_creator_id = :user_creator_id ORDER BY date_created DESC');
        $this->db->bind(':user_creator_id', $user_creator_id);
        return $this->db->resultSet();
    }
}
