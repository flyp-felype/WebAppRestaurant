# Progressive Web App for Restaurants

## O que é?

Progressive Web App para restaurantes e bistrô é um web app para gerenciar as reservas e menu do seu restaurante, com layout responsivo pode ser usado pelo restaurante com um tablet e pelos clientes.

## Official Documentation

Foi desenvolvido usando Laravel e Angular

Documentação do [Angular.io](https://angular.io/docs/ts/latest/). - O Angular ainda não foi totalmente implementado e versionado no Git.

Documentação do [Laravel ](http://laravel.com/docs).

Framework de Front-End foi usado o [Materialize.css](http://materializecss.com/color.html).


## Versão

Ainda estão na versão beta apenas com as reservas sendo desenvolvido


## Banco de dados

Copiei o arquivo .env.example e apague o .example

Altere o código para os dados do seu servidor

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=homestead<br>
DB_USERNAME=homestead<br>
DB_PASSWORD=secret<br>

Depois rode o artisan migrate para criar toda estrutura de Banco

php artisan migrate
