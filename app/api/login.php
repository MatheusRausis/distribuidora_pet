<?php
    session_start();
    require_once '../controllers/user_controller.php';
    header('Content-Type: application/json');
    $controller = new UserController();

    $data = json_decode(file_get_contents("php://input"), true);
    if(!$data['email'] || !$data['password']){
        http_response_code(400);
        echo json_encode(["error" => "Todos os campos são obrigatórios"]);
        exit;
    }

    $user = $controller -> _readOne($data['email']);

    if ($user && isset($user['password']) && password_verify($data['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        http_response_code(200);
        echo json_encode(["success" => true]);
        exit;
    } else {
        http_response_code(401);
        echo json_encode(["success" => false]);
        exit;
    }
?>