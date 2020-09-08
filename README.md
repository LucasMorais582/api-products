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

### Passos para inicializar a aplicação:

Primeiramente é necessário instalar o PHP, algumas de suas extensões e o Composer, todas as informações você encontra na documentação do [Laravel](https://laravel.com/docs/7.x/installation)

Criar banco de dados com o nome: "api_products" ou com o nome que desejar, desde que altere também no .env

Realizar a criação das tabelas com o comando:
```
php artisan migrate
```

Inicializar a aplicação com o comando:
```
php artisan serve
```

Para acessar a aplicação, utilize uma API Client como Postman ou Insomnia:
- http://localhost:8000
