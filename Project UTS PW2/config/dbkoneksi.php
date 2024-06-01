<?php
class Database {
    private $host = "localhost";
    private $dbname = "dbweather";  // Mengubah $database menjadi $dbname untuk konsistensi
    private $username = "root";
    private $password = "";
    private $charset = 'utf8mb4';
    private $pdo;  // Properti untuk menyimpan instance PDO

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $opt);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    // Metode lain untuk berinteraksi dengan database dapat ditambahkan di sini

    public function getPDO() {
        return $this->pdo;
    }
}
?>
