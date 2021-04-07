# Desafio investidor 10

## Baixe o projeto

## Instale o Ambiente
$ cd investidor10
$ docker-compose up -d
$ docker ps


## Monte a Base de dados
$ php artisan migrate:fresh --seed

## Acesse o site do Projeto
http://localhost/news

## Verificar as Rotas
$php artisan route:list 

## Testes
$ vendor/bin/phpunit
$ php artisan test