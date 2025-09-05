# Catálogo Online

Aplicação web desenvolvida em **PHP + MySQL + HTML/CSS/JS** como o objetivo de oferecer um **catálogo de produtos acessível via navegador**.
O sistema permite que usuários se cadastrem, façam login, naveguem pelos produtos e adicionem itens a um carrinho virtual.
Importante: a aplicação ainda não realiza vendas e nem alterações no banco de dados, só consome, mantendo o foco apenas na visualização e checkout.

---

## Funcionalidades
- Cadastro e login de usuários
- Navegação por catálogo de produtos
- Visualização de informações detalhadas de cada item
- Adição de produtos ao carrinho virtual
- Persistência de dados no banco MySQL

---

## Tecnologias Utilizadas
- **Backend:** PHP versão
- **Banco de Dados:** MySQL versão
- **Frontend:** HTML5, CSS3 e JavaScript
- **Servidor local:** Apache (WAMP64)

---

## Pré-requisitos
- [WAMP64](https://www.wampserver.com/en/download-wampserver-64bits) (PHP e MySQL já inclusos)
- [Git](https://git-scm.com/) (para clonar o repositório)

---

## Estrutura de pastas
```bash
📦 distribuidora_pet
 ┣ 📂 app          # Lógica do sistema (backend)
 ┃ ┣ 📂 api          # Rotas e endpoints
 ┃ ┣ 📂 config       # Configurações do sistema
 ┃ ┣ 📂 controllers  # Controladores que gerenciam a lógica de negócios
 ┃ ┣ 📂 models       # Modelos que representam a estrutura de dados
 ┃ ┣ migrations.php   # Inicia os models do banco de dados
 ┃
 ┣ 📂 docs         # Documentação do projeto
 ┃
 ┣ 📂 public       # Arquivos acessíveis pelo navegador (frontend)
 ┃ ┣ 📂 css        # Css
 ┃ ┣ 📂 img        # Imagens
 ┃ ┣ 📂 includes   # Arquivos reutilizáveis
 ┃ ┣ 📂 js         # JavaScript
 ┃ ┣ 📂 uploads    # Imagens do banco de dados
 ┃ ┣ car.php        # Carrinho de compras
 ┃ ┣ create-account.php # Tela de cadastro de usuários
 ┃ ┣ catalogo.php   # Visualização do catálogo de produtos
 ┃ ┣ detalhamento_produto.php # Página do produto individual
 ┃ ┣ index.php      # Página inicial
 ┃ ┣ login.php      # Tela de login
 ┃
 ┣ README.md       # Documentação principal
 ┣ LICENSE         # Licença do projeto

---

## Avisos
- Este projeto foi desenvolvido para fins acadêmicos.  
- Todas as imagens, logotipos e marcas utilizadas pertencem aos seus respectivos autores.  
- Não há fins comerciais ou de distribuição associados a este trabalho.
- Este projeto está sob a licença Acadêmica Não-Comercial, que permite estudo e reprodução com fins educacionais, mas proíbe o uso comercial. Consulte o arquivo [LICENSE](./LICENSE) para mais informações.

---

## Autores
- **Matheus Oliveira** - [GitHub](https://github.com/MatheusRausis) | [LinkedIn](https://www.linkedin.com/in/matheus-rausis)
- **Rian Keven** - [GitHub](https://github.com/RianKJP)
- **Pablo Henrique**

---