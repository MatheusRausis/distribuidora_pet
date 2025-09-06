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
