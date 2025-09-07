<?php
    require_once '../models/product.php';

    class ProductController{
        private $model;

        public function __construct(){
            $this -> model = new Product();
        }
        
        public function _quantityProducts(){
            return $this -> model -> _quantityProducts();
        }

        public function _generateProducts($id){
            return $this -> model -> _generateProduct($id);
        }

        public function _readSearch($search){
            return $this -> model -> _listSearch($search);
        }

        public function _quantityQuery($search){
            return $this -> model -> _quantityQuery($search);
        }
    }
?>