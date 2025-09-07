document.addEventListener('DOMContentLoaded', () => {
    generatePage();
});

async function generateProduct(id){
    try{
        const response = await fetch(`../app/api/product-endpoint?id=${id}`, {method: 'GET'});

        if(response.status === 200){
            console.log("Consulta bem sucedida");
            const result = await response.json();
            console.log(result);
            return result;
        } else {
            console.log("Consulta mal sucedida!");
        }
    } catch (err){
        console.error('Erro na requisição: ', err);
    }
}

async function generatePage(){
    const container = document.getElementById('container');
    const id = new URLSearchParams(window.location.search).get('id');
    const data = await generateProduct(id);

    if(data.weight < 1){
        weight = data.weight * 1000;
        measure = 'gr';
    } else {
        weight = data.weight;
        measure = 'Kg';
    }

    const template = `
        <div class="product-image">
            <img id="product-image" src="${data.image_url}" alt="${data.name}">
        </div>
        <div class="product-details">
            <h2 id="product-title">${data.name}</h2>
            <p class="weight">Peso líquido: ${weight}${measure}</p>
            <hr 2px>
            <p class="brand">Modelo/Marca: ${data.brand}</p>
            <hr 2px>
            <h3 class="product-price" id="product-price"> ${data.price}</h3>
            <p id="product-installments"></p>
            <div class="quantity">
                <button type="button" class="minus">-</button>
                <input type="text" id="quantity" value="1">
                <button type="button" class="plus">+</button>
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
    `;

    container.insertAdjacentHTML('beforeend', template);    
}

// Lógica para aumentar e diminuir quantidade
const quantityInput = document.getElementById('quantity');
const minusButton = document.querySelector('.minus');
const plusButton = document.querySelector('.plus');

minusButton.addEventListener('click', () => {
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
        quantity--;
        quantityInput.value = quantity;
    }
});

plusButton.addEventListener('click', () => {
    let quantity = parseInt(quantityInput.value);
    quantity++;
    quantityInput.value = quantity;
});
