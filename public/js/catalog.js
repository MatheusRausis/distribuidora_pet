document.addEventListener('DOMContentLoaded', () => {
    const search = new URLSearchParams(window.location.search).get('search') ?? null;
    
    if(search == null){
        generateCard();
    } else {
        generateQuery(search);
    }
});

async function quantityProducts(){
    try{
        const response = await fetch('../app/api/product-endpoint.php', {method: 'GET'});

        if(response.status === 200){
            const result = await response.json();
            return result.quantity;
        } else {
            console.log('Consulta mal sucedida!')
        }

    } catch (err) {
        console.error('Erro na requisição: ', err);
    }
}

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

async function generateCard(){
    let quantityProduct = await quantityProducts();
    const container = document.getElementById('product-grid');

    for (let index = 0; index < quantityProduct; index++){
        const data = await generateProduct(index + 1);
        const priceBulk = data.price * 5 - (data.price * 5/100);
        const template = `
            <div class="product-card">
                <a href="./product_details.php?id=${data.id}"><img src="${data.image_url}" alt="${data.name}" class="product-img"></a>
                <div class="product-body">
                    <h3>${data.name}</h3>
                    <p class="price-unit">Preço Unitário: <span>R$ ${data.price}</span></p>
                    <p class="price-bulk">Preço Atacado (5+): <span>R$ ${priceBulk.toFixed(2)}</span></p>
                    <div class="product-actions">
                        <input type="number" min="1" value="1" class="qty-input">
                        <button class="btn-cart">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', template);    
    }
}

async function quantitySearchs(search){
    try{
        const response = await fetch(`../app/api/search.php?search=${search}&function=quantity`, {method: 'GET'});

        if(response.status === 200){
            const result = await response.json();
            return result;
        } else {
            console.log('Consulta mal sucedida!')
        }

    } catch (err) {
        console.error('Erro na requisição: ', err);
    }
}

async function generateSearch(search){
    try{
        const response = await fetch(`../app/api/search.php?search=${search}`, {method: 'GET',});
        
        if(response.status === 200){
            console.log('Pesquisa bem sucedida');
            const result = await response.json();
            return result;
        } else {
            console.log('Pesquisa mal sucedida');
        }   

    } catch(err){
        console.error('Erro na requisição: ', err);
    }
}

async function generateQuery(search){
    const container = document.getElementById('product-grid');
    const quantitySearch = await quantitySearchs(search);
    let data = await generateSearch(search);

    for(let index = 0; index < quantitySearch; index++){
        item = data[index];
        const priceBulk = item.price * 5 - (item.price * 5/100);
        const template = `
            <div class="product-card">
                <a href="./product_details.php?id=${item.id}"><img src="${item.image_url}" alt="${item.name}" class="product-img"></a>
                <div class="product-body">
                    <h3>${item.name}</h3>
                    <p class="price-unit">Preço Unitário: <span>R$ ${item.price}</span></p>
                    <p class="price-bulk">Preço Atacado (5+): <span>R$ ${priceBulk.toFixed(2)}</span></p>
                    <div class="product-actions">
                        <input type="number" min="1" value="1" class="qty-input">
                        <button class="btn-cart">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', template);    
    }
}