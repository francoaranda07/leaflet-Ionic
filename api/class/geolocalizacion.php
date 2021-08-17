<?php
    class Geo{

        // Connection
        private $conn;

        // Table
        private $db_table = "geolocalizacion";

        // Columns
        public $id;
        public $longitud;
        public $latitud;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getGeo(){
            $sqlQuery = "SELECT id, latitud, longitud FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createGeo(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        latitud = :latitud, 
                        longitud = :longitud";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->latitud=htmlspecialchars(strip_tags($this->latitud));
            $this->longitud=htmlspecialchars(strip_tags($this->longitud));
        
            // bind data
            $stmt->bindParam(":latitud", $this->latitud);
            $stmt->bindParam(":longitud", $this->longitud);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // GET SINGLE
        public function getSingleGeo(){
            $sqlQuery = "SELECT
                        id, 
                        latitud, 
                        longitud
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->latitud = $dataRow['latitud'];
            $this->longitud = $dataRow['longitud'];
        }        

        // UPDATE
        public function updateGeo(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        latitud = :latitud, 
                        longitud = :longitud
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->latitud=htmlspecialchars(strip_tags($this->latitud));
            $this->longitud=htmlspecialchars(strip_tags($this->longitud));
        
            // bind data
            $stmt->bindParam(":latitud", $this->latitud);
            $stmt->bindParam(":longitud", $this->longitud);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

    }
?>

