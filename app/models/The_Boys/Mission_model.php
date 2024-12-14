<?php
namespace The_Boys;

use PDO;
use PDOException;

class Mission_model {
    private $table = 'boys_missions';
    private $table2 = 'boys_mission_participants';
    private $db;
    
    public function __construct() {
        $this->db = new \Database;
    }

    public function getAllMissions() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMissionById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE mission_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addMission($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (mission_title, mission_description, date_time, participants, location, occurence) 
                  VALUES (:mission_title, :mission_description, :date_time, :participants, :location, :occurence)";
        
        $this->db->query($query);
        $this->db->bind(':mission_title', $data['mission_title']);
        $this->db->bind(':mission_description', $data['mission_description']);
        $this->db->bind(':date_time', $data['date_time']);
        $this->db->bind(':participants', 0); // Ensure this field is set in the `$data` array
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':occurence', 'NOT YET');
        $this->db->execute();
    }
    

    public function deleteMission($mission_id) {
        // Delete related rows in boys_mission_participants
        $query1 = "DELETE FROM boys_mission_participants WHERE mission_id = :mission_id";
        $this->db->query($query1);
        $this->db->bind(':mission_id', $mission_id);
        $this->db->execute();
    
        // Delete the mission
        $query2 = "DELETE FROM boys_missions WHERE id = :mission_id";
        $this->db->query($query2);
        $this->db->bind(':mission_id', $mission_id);
        return $this->db->execute();
    }
    

    public function updateMission($data) {
        $query = "UPDATE " . $this->table . " 
                  SET mission_title = :title, 
                      mission_description = :description, 
                      date_time = :date_time, 
                      location = :location 
                  WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':title', $data['mission_title']);
        $this->db->bind(':description', $data['mission_description']);
        $this->db->bind(':date_time', $data['date_time']); // Corrected parameter name
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':id', $data['mission_id']);
        return $this->db->execute();
    }
    

    public function addParticipant($mission_id, $user_id) {
        $query = "INSERT INTO " . $this->table2 . " (user_id, mission_id) VALUES (:user_id, :mission_id)";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':mission_id', $mission_id);
        $this->db->execute();
    }

    public function isParticipantExists($mission_id, $user_id) {
        $query = "SELECT COUNT(*) FROM boys_mission_participants WHERE mission_id = :mission_id AND user_id = :user_id";
        $this->db->query($query);
        $this->db->bind(':mission_id', $mission_id);
        $this->db->bind(':user_id', $user_id);
        $count = $this->db->singleColumn(); // Assuming `singleColumn` fetches a single value
        return $count > 0; // Return true if a record exists
    }
    
    

}