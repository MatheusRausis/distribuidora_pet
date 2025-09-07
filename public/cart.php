<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/car.css">
    <title>carrinho</title>
</head>
<body>
    <main>
        <section class="Seção-carrinho" id="Seção-carrinho">
            <button class="back-button" onclick="window.history.back()">Voltar</button>
            <div class="container">
                <h2>Sua Sacola</h2>
        
                <!-- Contêiner para os itens do carrinho -->
                <div id="cart-items" class="container d-flex flex-wrap"></div>
        
                <!-- Exibição do total -->
                <div id="total-price" class="mt-3">Valor total: R$ 0,00</div>
        
                <!-- Botão para resetar o carrinho -->
                <button onclick="ResetarCarrinho()" class="btn btn-danger mt-3">Esvaziar Carrinho</button>
        
                <!-- Botão para finalizar a compra -->
                <button id="finalizar-compra" class="btn btn-primary mt-3">Finalizar Compra</button>
            </div>
        </section>
        
    </main>
</body>
</html>