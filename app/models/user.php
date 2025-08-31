<?php
    require_once 'models.php';

    class User extends Models{
        public function _createTable(){
            $sql = "CREATE TABLE IF NOT EXISTS user_data(
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(150) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL
            )";

            parent::_query($sql);
        }

        public function _listOne($email){
            $stmt = $this -> conn -> prepare("SELECT * FROM user_data WHERE email = ? LIMIT 1");
            if(!$stmt) return [];

            $stmt -> bind_param('s', $email);
            $stmt -> execute();
            $result = $stmt -> get_result();
            return $result -> fetch_assoc();
        }
    }
?>