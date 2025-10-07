<?php
class Connection {
    private $host = 'localhost';
    private $db = 'database';
    
    public function connect() {
        // BUG CORRIGÉ : ajout de la gestion d'erreur
        try {
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->db}");
            return 'Connected';
        } catch (PDOException $e) {
            error_log('Connection error: ' . $e->getMessage());
            return false;
        }
    }
}

