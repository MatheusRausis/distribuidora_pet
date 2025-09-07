<?php
    require_once 'models.php';

    class Product extends Models{
        public function _createTable(){
            $sql = "CREATE TABLE IF NOT EXISTS product_data(
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL, -- Nome do Produto
                description TEXT, -- Descrição do Produto
                price DECIMAL(10, 2), -- Preço do Produto
                stock INT DEFAULT 0, -- Estoque do Produto
                sku VARCHAR(50), -- Código Único Interno
                brand VARCHAR(100), -- Marca do Produto
                weight DECIMAL(10, 2), -- Peso do Produto
                image_url VARCHAR(255), -- Imagem do Produto
                category_id INT,
                status ENUM('active', 'inactive') DEFAULT 'active', -- Estado do Produto para venda
                FOREIGN KEY (category_id) REFERENCES categories(id)
            ) ENGINE=InnoDB";

            parent::_query($sql);
        }

        public function _listSearch($search){
            $search = '%' . $search . '%';

            $stmt = $this -> conn -> prepare("SELECT p.* 
            FROM product_data p
            JOIN categories_data c ON p.category_id = c.id
            WHERE p.name LIKE ?
                OR c.name LIKE ?
                OR brand LIKE ?
                OR description LIKE ?");

            $stmt -> bind_param("ssss", $search,  $search,  $search,  $search);
            $stmt -> execute();
            $result = $stmt -> get_result();
            $products = [];
            while($row = $result -> fetch_assoc()){
                $products[] = $row;
            }
            return $products;
        }

        public function _quantityProducts(){
            $stmt = $this -> conn -> prepare("SELECT COUNT(*) FROM product_data");
            $stmt -> execute();
            $result = $stmt -> get_result();
            $row = $result -> fetch_row();    
            return (int) $row[0];   
        }

        public function _quantityQuery($search){
            $search = '%' . $this -> conn -> real_escape_string($search) . '%';
            $stmt = $this -> conn -> prepare("SELECT COUNT(*)
            FROM product_data p
            LEFT JOIN categories_data c ON p.category_id = c.id
            WHERE p.name LIKE ?
                OR c.name LIKE ?
                OR p.brand LIKE ?
                OR p.description LIKE ?");

            $stmt -> bind_param("ssss", $search,  $search,  $search,  $search);
            $stmt -> execute();
            $result = $stmt -> get_result();
            $row = $result -> fetch_row();    
            return (int) $row[0];   
        }

        public function _generateProduct($id){
            $stmt = $this -> conn -> prepare("SELECT * FROM product_data WHERE id = ?");
            $stmt -> bind_param('i', $id);
            $stmt -> execute();
            $result = $stmt -> get_result();
            $result = $result -> fetch_assoc();
            return $result;
        }
    }
?>