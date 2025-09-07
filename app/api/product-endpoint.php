<?php
    require_once '../controllers/product-controller.php';
    $controller = new ProductController();
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':
            $id = $_GET['id'] ?? null;
            if($id == null){
                http_response_code(200);
                $quantity = $controller -> _quantityProducts();
                header('Content-Type: application/json');
                echo json_encode(['quantity' => $quantity]);
                break;
            } else {
                http_response_code(200);
                $product = $controller -> _generateProducts($id);
                header('Content-Type: application/json');
                echo json_encode($product);
                break;
            }
        
        default:
            http_response_code(405);
            echo json_encode(['error' => 'Método não permitido']);
            break;
    }
?>