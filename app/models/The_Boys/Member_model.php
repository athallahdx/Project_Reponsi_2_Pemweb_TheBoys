<?php
namespace The_Boys;

use PDO;
use PDOException;

class Member_model {
    private $table = 'boys_members';
    private $db;
    
    public function __construct() {
        $this->db = new \Database;
    }

    public function getAllMembers() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMemberById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE member_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addMember($data) {
        $query = "INSERT INTO " . $this->table . " (member_id, nickname, full_name, image_path, position, ethnicity, ability, description) VALUES (:member_id, :nickname, :full_name, :image_path, :position, :ethnicity, :ability, :description)";
        $this->db->query($query);
        $this->db->bind(':member_id', $data['member_id']);
        $this->db->bind(':nickname', $data['nickname']);
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':image_path', $data['image_path']);
        $this->db->bind(':position', $data['position']);
        $this->db->bind(':ethnicity', $data['ethnicity']);
        $this->db->bind(':ability', $data['ability']);
        $this->db->bind(':description', $data['description']);
        $this->db->execute();
    }

    public function updateMember($id, $data) {
        $query = "UPDATE " . $this->table . " SET nickname = :nickname, full_name = :full_name, image_path = :image_path, position = :position, ethnicity = :ethnicity, ability = :ability, description = :description WHERE member_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->bind(':nickname', $data['nickname']);
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':image_path', $data['image_path']);
        $this->db->bind(':position', $data['position']);
        $this->db->bind(':ethnicity', $data['ethnicity']);
        $this->db->bind(':ability', $data['ability']);
        $this->db->bind(':description', $data['description']);
        return $this->db->execute();
    }

    public function deleteMember($id) {
        $query = "DELETE FROM " . $this->table . " WHERE member_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

}
