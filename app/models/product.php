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

        public function _listOne($search){
            $sql = "SELECT p.* 
            FROM product_data p
            JOIN category_data c ON p.category_id = c.id
            WHERE name LIKE '%$search%'
                OR c.name LIKE '%$search%'
                OR brand LIKE '$search'
                OR description LIKE '%$search%'";
        }
    }
?>