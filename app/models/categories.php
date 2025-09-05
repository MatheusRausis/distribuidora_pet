<?php
    require_once 'models.php';

    class Categories extends Models{
        public function _createTable(){
            $sql = "CREATE TABLE categories_data(
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL
            ) ENGINE=InnoDB";
        }
    }
?>