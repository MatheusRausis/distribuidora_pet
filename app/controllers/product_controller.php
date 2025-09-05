<?php
    require_once '../models/product.php';

    class ProductController{
        private $model;

        public function __construct(){
            $this -> model = new Product();
        }

        public function _readName($search){
            return $this -> model -> _listOne($search);
        }
    }
?>