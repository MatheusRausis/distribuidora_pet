<?php
    require_once 'models/user.php';
    require_once 'models/categories.php';
    require_once 'models/product.php';

    $user = new User();
    $user -> _createTable();

    $categories = new Categories();
    $categories -> _createTable();

    $product = new Product();
    $product -> _createTable();
?>