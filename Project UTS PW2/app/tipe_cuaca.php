<?php
class Tipe_Cuaca {
    private $conn;
    private $table_name = "Weather_Types";

    public $id;
    public $name;

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

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (name) 
                    VALUES (?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name,
            ]);
        
            return $data->rowCount() > 0;
        }

        // Page Update
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update
        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET name=?
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->name,
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