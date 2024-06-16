# Supermarket CRUD

## Descrição

Este projeto é uma aplicação de CRUD (Create, Read, Update, Delete) para gerenciamento de produtos de supermercado. O projeto foi desenvolvido como parte de um desafio técnico para uma vaga de desenvolvedor Full Stack, utilizando Laravel para o backend e Vue.js para o frontend.

## Funcionalidades

- **Autenticação de Usuários**: Apenas usuários autenticados podem acessar as funcionalidades de CRUD.
- **Gerenciamento de Produtos**:
  - Adicionar novo produto
  - Listar produtos
  - Atualizar produto
  - Excluir produto
- **Atributos do Produto**:
  - Nome
  - Preço
  - Tipo
  - Quantidade
  - Foto

## Tecnologias Utilizadas

- **Backend**: Laravel
- **Frontend**: Vue.js
- **Banco de Dados**: MySQL
- **Autenticação**: Laravel Passport

## Requisitos

- XAMPP (ou outra stack PHP similar)
- Composer
- Node.js e npm

## Configuração do Ambiente

### Backend (Laravel)

1. **Instale o XAMPP**: Certifique-se de que o XAMPP está instalado e em execução com os serviços Apache e MySQL ativados.
2. **Clone o Repositório**:
   ```bash
   git clone https://github.com/seu-usuario/supermarket-crud.git
   cd supermarket-crud
   ```
3. **Instale as Dependências do Laravel**:
   ```bash
   composer install
   ```
4. **Configure o Banco de Dados**:
   - Crie um banco de dados MySQL chamado `supermarket`.
   - Configure as informações de conexão no arquivo `.env`:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=supermarket
     DB_USERNAME=root
     DB_PASSWORD=sua_senha
     ```
5. **Execute as Migrações**:
   ```bash
   php artisan migrate
   ```
6. **Instale o Laravel Passport**:
   ```bash
   php artisan passport:install
   ```
7. **Inicie o Servidor Laravel**:
   ```bash
   php artisan serve
   ```

### Frontend (Vue.js)

1. **Navegue até o Diretório do Frontend**:
   ```bash
   cd supermarket-frontend
   ```
2. **Instale as Dependências do Vue.js**:
   ```bash
   npm install
   ```
3. **Inicie o Servidor de Desenvolvimento do Vue.js**:
   ```bash
   npm run serve
   ```

## Uso

1. **Registro e Login de Usuário**:
   - Acesse `http://localhost:8080/login` e registre um novo usuário ou faça login com um usuário existente.

2. **Gerenciamento de Produtos**:
   - Após o login, você pode criar, visualizar, atualizar e excluir produtos através da interface da aplicação.

## Estrutura do Projeto

### Backend (Laravel)

- `app/Models/Product.php`: Modelo do Produto.
- `app/Http/Controllers/ProductController.php`: Controlador RESTful para gerenciamento dos produtos.
- `routes/api.php`: Definição das rotas de API.

### Frontend (Vue.js)

- `src/components/ProductList.vue`: Componente para listar os produtos.
- `src/components/ProductCreate.vue`: Componente para adicionar novos produtos.
- `src/components/ProductEdit.vue`: Componente para editar produtos existentes.
- `src/components/Login.vue`: Componente para login de usuário.
- `src/router/index.js`: Configuração das rotas do Vue Router.

## Contato

- **Nome**: Reinald Mendes
- **Email**: Reinald_30_2009@hotmail.com
- **LinkedIn**: [Seu Perfil](https://www.linkedin.com/in/reinald-mendes-b712b9182/)

---

Este projeto foi desenvolvido como parte de um desafio técnico. Qualquer feedback ou sugestão é bem-vinda!
```

