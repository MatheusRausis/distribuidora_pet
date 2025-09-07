<?php
    require_once '../controllers/user_controller.php';
    $controller = new UserController();
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'POST': // Criar/ Cadastrar
            $data = json_decode(file_get_contents("php://input"), true);
            if (!$data['name'] || !$data['email'] || !$data['password']) {
                http_response_code(400);
                echo json_encode(["error" => "Todos os campos são obrigatórios"]);
                exit;
            }
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $result = $controller -> _create($data);
            http_response_code(201);
            echo json_encode(["message" => "Usuário criado com sucesso"]);
            break;

        default:
            http_response_code(405); // Método não permitido
            echo json_encode(["error" => "Método não permitido"]);
            break;
    }
?>