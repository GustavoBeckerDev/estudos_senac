<?php

require_once 'config/database.php';

class Task
{
    private $conn;
    private $table = 'tasks';

    public $id;
    public $user_id;
    public $title;
    public $description;
    public $created_at;
    public $updated_at;

    public function __construct()
    {   
        $database = new Database();
        $this->conn = $database->getConection();
    }

    public function create($user_id, $title, $description = '')
    {
        $title = htmlspecialchars(strip_tags($title));
        $descripton = htmlspecialchars(strip_tags($description));

        $query = "INSERT INTO " . $this->table . "(user_id, title, description) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        
        return $stmt->execute([$user_id, $title, $description]);
    }

    public function read($user_id)
    {
        $query = "SELECT * FROM " . $this->table . "WHERE user_id = ? ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($user_id);
        $stmt->execute([$user_id]);

        return $stmt->fetch();
    }

    public function update($id, $user_id, $title, $description = '')
    {
        $title = htmlspecialchars(strip_tags($title));
        $descripton = htmlspecialchars(strip_tags($description));

        $query = "UPDATE " . $this->table . "SET title = ?, $description = ? WHERE id = ? AND user_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id, $user_id]);
    }





}



?>