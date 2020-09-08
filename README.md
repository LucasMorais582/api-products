# api-products

Aplicação back-end que manipula dados de produtos.

## Tecnologias

- Laravel
- PHP
- Eloquent
- PHPUnit
- MySQL
- Composer

## Preparação do ambiente

Clonando o projeto
```
git clone https://github.com/LucasMorais582/api-products.git
```

## Pré-requisitos:
- Primeiramente é necessário instalar o PHP, algumas de suas extensões e o Composer, todas as informações você encontra na documentação do [Laravel](https://laravel.com/docs/7.x/installation)

## Banco de dados:
- O primeiro passo é instalar o [Docker](https://docs.docker.com/engine/install/) na sua máquina
- Em seguida, instalar a imagem do [Mysql](https://hub.docker.com/_/mysql). Caso nunca tenha utilizado o Mysql na sua máquina, é necessário criar seu login para ter acesso.
- Criar um banco de dados com o nome: "api_products" ou com o nome que desejar, desde que altere também no .env. (Nesse passo, pode-se utilizar o phpAdmin ou algum programa como o [Dbeaver](https://dbeaver.io/) ou [Mysql Workbanch](https://www.mysql.com/products/workbench/) para realizar a conexão com a imagem).


## Passos para inicializar a aplicação:

Após entrar no diretório do projeto, realizar a criação das tabelas com o comando:
```
php artisan migrate
```

Inicializar a aplicação com o comando:
```
php artisan serve
```

Para acessar a aplicação, utilize uma API Client como [Postman](https://www.postman.com/) ou [Insomnia Core](https://insomnia.rest/download/):
- http://localhost:8000
