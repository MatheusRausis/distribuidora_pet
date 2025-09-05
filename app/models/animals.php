<?php
    require_once 'models.php';

    class Animals extends Models{
        public function _createTable(){
            $sql = "CREATE TABLE IF NOT EXISTS animals_data(
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL
            ) ENGINE=InnoDB";
        }
    }
?>