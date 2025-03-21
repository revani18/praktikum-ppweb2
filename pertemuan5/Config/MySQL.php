<?php
class ConnectDB{
    public $conn;
    public function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "bukutamu");
        if (!$this->conn) {
            die("Gagal Terkoneksi: " . mysqli_connect_error());
        }

    }
    public function db(){
        return $this->conn;
    }
    
}

$db = new ConnectDB();
$conn = $db->db();
?>