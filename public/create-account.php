<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crie sua Conta</title>
        <link rel="stylesheet" href="./css/create-account-style.css">
        <script src="./js/create-account.js" defer></script>
    </head>
    <body>
        <section class="login">

            <section class="title">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>

                <div>
                    <p>Crie sua Conta</p>
                </div>
            </section>

            <form id="create-account-form">
                <div class="div-label">
                    <label for="name">Nome:</label>
                </div>
                <div class="input-form">
                    <svg viewBox="0 0 24 24" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m15.626 11.769a6 6 0 1 0 -7.252 0 9.008 9.008 0 0 0 -5.374 8.231 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 9.008 9.008 0 0 0 -5.374-8.231zm-7.626-4.769a4 4 0 1 1 4 4 4 4 0 0 1 -4-4zm10 14h-12a1 1 0 0 1 -1-1 7 7 0 0 1 14 0 1 1 0 0 1 -1 1z"></path>
                    </svg>
                    <input id="name" name="name" type="text" class="input" placeholder="Insira seu nome">
                </div>

                <div class="div-label">
                    <label for="email">Email</label>
                </div>
                <div class="input-form">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20">
                        <g data-name="Layer 3" id="Layer_3">
                            <path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path>
                        </g>
                    </svg>
                    <input id="email" name="email" type="text" class="input" placeholder="Insira seu email">
                </div>

                <div class="div-label">
                    <label for="password">Senha</label>
                </div>
                <div class="input-form">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20">
                        <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path>
                        <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path>
                    </svg>  
                    <input id="password" name="password" type="password" class="input" placeholder="Insira sua senha">
                </div>

                <button class="button-login" type="submit">Criar Conta</button>
            </form>
        </section>

        <section class="composition">
            <img src="img/Pets Serenos Sob o Céu Estrelado.png" alt="">
        </section>
    </body>
</html>