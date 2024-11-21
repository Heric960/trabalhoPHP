<?php

require __DIR__ . '/../../vendor/autoload.php';

class Database {
    private $con;
    private $db;

    public function __construct() {
        // Conexão com o MongoDB
        $this->con = new MongoDB\Client("mongodb://localhost:27017");

        // Definindo o banco de dados `usuario`
        $this->db = $this->con->usuario; 
    }

    public function getConnection(){
        return $this->con;
    }

    // Método para obter o banco de dados
    public function getDatabase(){
        return $this->db;
    }
}

?>

