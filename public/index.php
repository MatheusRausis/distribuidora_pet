<?php
    $page = $_GET['page'] ?? 'home';

    $pages = [
        'home' => __DIR__ . '/includes/home.php',
        'login' => __DIR__ . '/login.php',
        'create-account' => __DIR__ . '/create-account.php',
        'car' => __DIR__ . '/car.php',
        'catalogo' => __DIR__. '/catalogo.php',
        'produto' => __DIR__ . '/detalhamento_produto.php',
    ];

    $content = $pages[$page] ?? $pages['home'];

    include __DIR__ . '/includes/header.php';
    include $content;
    include __DIR__ . '/includes/footer.php';
?>
