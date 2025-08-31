<?php
    require_once '../models/user.php';

    class UserController{
        private $model;
        private $table = 'user_data';

        public function __construct(){
            $this -> model = new User();
        }

        public function _create($data) {
            return $this -> model -> _insert($this -> table, $data);
        }

        public function _readOne($email){
            return $this -> model -> _listOne($email);
        }
    }
?>