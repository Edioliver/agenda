# README #
Sistema de agenda com nome, email e telefone.

# Configuração #
Para utilização basta executar os seguintes comando:

- docker-compose up -d 
- após subir os containers executar: docker-compose run php-fpm bash
- dentro do container execute: php artisan migrate
- para subir dados fake execute: php artisan migrate:refresh --seeder
- para acessar o sistema acesse: http://localhost/



