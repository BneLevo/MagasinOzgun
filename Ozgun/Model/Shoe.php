<?php

require CONFIG_PATH . 'dbInfo.php';

class Shoe {
    private $db;

    public function __construct() {
        $this->db = Database::connexion();
    }

    public function getAll() {
        $sql = "SELECT * FROM Shoe";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM Shoe WHERE id_Shoe = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

