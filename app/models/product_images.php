<?php 
    require_once 'models.php';

    class ProductImage extends Models{
        public function _createTable(){
            $sql = "CREATE TABLE IF NOT EXISTS product_image_data(
                id INT AUTO_INCREMENT PRIMARY KEY,
                product_id INT NOT NULL,
                image_url VARCHAR(255) NOT NULL,
                is_primary BOOLEAN DEFAULT FALSE,
                FOREING KEY (product_id) REFERENCES product_data(id) ON DELETE CASCADE
            ) ENGINE=InnoDB";

            parent::_query($sql);
        }
    }
?>