<?php
class Ramalan_Cuaca {
    private $conn;
    private $table_name = "weather_forecasts";

    public $id;
    public $location_id;
    public $weather_type_id;
    public $high_temperature;
    public $low_temperature;
    public $forecast_date;

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

        // Store
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (location_id, weather_type_id, high_temperature, low_temperature, forecast_date) 
                    VALUES (?,?,?,?,?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->location_id,
                $this->weather_type_id,
                $this->high_temperature,
                $this->low_temperature,
                $this->forecast_date,
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
                    SET location_id=?, weather_type_id=?, high_temperature=?,  low_temperature=?,  forecast_date=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->location_id,
                $this->weather_type_id,
                $this->high_temperature,
                $this->low_temperature,
                $this->forecast_date,
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