<?php
date_default_timezone_set('Europe/Paris');
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/erreurs.log');
    ini_set('display_errors', 0);
    error_reporting(E_ALL);

    class Database{

        private $user = "root";
        private $host = "localhost";
        private $db_name = "magasinChausseursOzgun";
        private $password = "";
        private $port = 3307;
        private $db;

        public function connect(){
            $this -> db = null;

            try{
                $this->db = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";port=" . $this->port . ";charset=utf8mb4", $this->user, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }   
            catch(PDOException $e)
            {
                trigger_error('La connexion à echouer');
            }

            return $this->db;
        }
    }

    