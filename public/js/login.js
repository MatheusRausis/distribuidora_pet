async function logar(e){
    e.preventDefault();

    const email = document.getElementById('email').value;
    const senha = document.getElementById('password').value;
    
    const data = {
        email: email,
        password: senha
    };

    try{
        const response = await fetch('../app/api/login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const resposta = await response.json();
        
        if(resposta.success){
            window.location.href = './includes/header.php';
        } else {
            console.log('Falha no login');
        }
    } catch (err) {
        console.error('Erro na requisição: ', err)
    }
}