const form = document.getElementById('create-account-form');

form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const nome = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('password').value;

    const data = {
        name: nome,
        email: email,
        password: senha
    };

    try {
        const response = await fetch('../app/api/user_endpoint.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        const result = await response.json();

        if(result.message === 'Usuário criado com sucesso'){
            console.log('Conta criada com sucesso!');
            window.location.href = 'login.php';
        } else {
            console.log(result.error || result.message);
        }
    } catch (err){
        console.error('Erro na requisição: ', err);
    }
});