<?php
class Lokasi {
    private $conn;
    private $table_name = "locations";
    public $id;
    public $name;
    public $latitude;
    public $longitude;

    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    public function index() {
        $query = "SELECT * FROM {$this->table_name}";
        $data = $this->conn->prepare($query);
        $data->execute();
        return $data;
    }

    public function create(){
        header("Location: create.php");
        exit();
    }

        // Add
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (name, latitude, longitude) 
                    VALUES (?,?,?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name,
                $this->latitude,
                $this->longitude,
            ]);
        
            return $data->rowCount() > 0;
        }

        // Edit
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update
        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET name=?, latitude=?, longitude=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->name,
                $this->latitude,
                $this->longitude,
                $this->id,
            ]);
        
            return $data->rowCount() > 0;
        }

        // Delete
        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }
?>