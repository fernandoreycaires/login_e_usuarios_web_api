<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnologias

<p>Laravel 10 </p>
<p>AdminLTE 3.2.0 </p>
<p>PHP 8.1 </p>
<p>JWTToken - Tymon JWTAuth 2.0 </p>
<p>BD - MariaDB 10 </p>
<p>Docker </p>

## Construir e rodar o projeto

## .env
<p>Faça uma copia do arquivo .env.exemplo e deixe com o nome de .env </p>
<p>Configure dentro de .env a conexão com o banco de dados e o chave JWT (o Docker tem um BD já configurado em localhost) </p>
<br>

## Baixar bibliotecas

<p>composer require laravel/jetstream </p>
<p>npm install </p>
<p>npm run build </p>
<p>php artisan migrate </p>
<br>
<p>composer require tymon/jwt-auth </p>
<br>

## Rodar a docker
<p>Entre na pasta raiz do projeto  </p>
<p>Rode o comando abaixo </p>

<p>sudo docker compose up -d  </p>

## Gerar chave de criptografia do Docker
<p>sudo docker compose exec app php artisan key:generate </p>

## Alimentar o banco com informações iniciais temporarias
<p>sudo docker compose exec app php artisan db:seed </p>

## Informações extras
<p>O banco de dados que esta configurado na docker esta apontando o armazenamento para docker_components/db/sql/ </p>
<p>A configuração do servidor HTTP Nginx e do dservidor PHP estão dentro do diretório docker_components, caso necessite de alguma configuração extra </p>
<p>Tem uma interface grafica para visualização , e também tem a API com autenticação por JWT Bearer</p>
<p>Os menus criados são apenas para testes, não tem funcionalidades </p>

##Usuario Supremo inicial
<p>Email: senhor_das_galaxias@nasa.org</p>
<p>Senha: senhordasgalaxias123</p>
