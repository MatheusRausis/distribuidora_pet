<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhe_produto.css">
    <title>detalhamento_produto</title>
</head>
<body>
    <main>
        <section class="Seção-carrinho" id="Seção-carrinho">
            <button class="back-button" onclick="window.history.back()">Voltar</button>
            <div class="container">
                <div class="product-image">
                    <img id="product-image" src="" alt="Imagem do Produto">
                </div>
                <div class="product-details">
                    <h2 id="product-title">Carregando...</h2>
                    <p class="weight">Peso líquido: 5g</p>
                    <hr 2px>
                    <p class="brand">Modelo/Marca: <a href="#">PetBio</a></p>
                    <hr 2px>
                    <h3 class="product-price" id="product-price"></h3>
                    <p id="product-installments"></p>
                    <div class="quantity">
                        <button class="minus">-</button>
                        <input type="text" id="quantity" value="1">
                        <button class="plus">+</button>
                    </div>
                    <button class="buy-button">Comprar</button>
                    <button class="shipping-button" onclick="AdicionarSacola()">Adicionar ao Carrinho</button>
                    <div class="pagamento">
                        <div class="payment-methods">
                            <ul>
                                <li>
                                    <img src="img/pix.svg" alt="Pix">
                                    <p class="product-price"></p>
                                </li>
                                <hr 2px class="linha">
                                <li>
                                    <img src="img/th.jpeg" alt="Boleto">
                                    <p class="product-price"></p>
                                </li>
                                <hr 2px class="linha">
                            </ul>
                            <div class="imgs-pags">
                                <img src="img/ico_visa.gif" alt="Visa">
                                <img src="img/ico_mastercard.gif" alt="Mastercard">
                                <img src="img/ico_elo.gif" alt="elo">
                                <p>Parcela 6x sem juros</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>