const search = document.getElementById('query');

search.addEventListener('submit', async () => {

    const query = document.getElementById('query').value;

    try{
        const response = await fetch('../app/api/search.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(query),
        });

        const result = await response.json();

        if(result.message === 'Pesquisa bem sucedida'){

            console.log('Pesquisa bem sucedida');
        } else {
            console.log('Pesquisa mal sucedida');
        }   

    } catch(err){
        console.error('Erro na requisição: ', err);
    }
});