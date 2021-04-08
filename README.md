# Desafio Investidor 10

Foi montado um ambiente em docker compose com PHP7, MSQL e o NGINX

## Baixe o projeto

git clone https://github.com/thiagohome2/investidor10.git

## Instale o Ambiente

cd investidor10/laravel-app

composer install //composer previamente instalado

docker-compose up -d //docker instalado

docker ps

php artisan key:generate  


## Monte a Base de dados
php artisan migrate:fresh --seed

Um detalhe besta mas que não consegui resover nesse desfio, quando rodar o migrate troca la no .env o DB_HOST=db por DB_HOST=127.0.0.1, depois volta de novo para funcionar a aplicação.

## Acesse o site do Projeto
http://localhost/news

## Verificar as Rotas
$php artisan route:list 
