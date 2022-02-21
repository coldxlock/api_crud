# CRUD Usuário ( ACL )

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requerimentos

* PHP 7 ou superior
* Banco de dados ( PostgreSQL)
* Servidor Web (por exemplo: Apache, Nginx, IIS)

## Framework

CRUD Usuários (ACL) com [Laravel](http://laravel.com), o melhor framework PHP atualmente, como base.

## Instalação

* Instale o [Composer](https://getcomposer.org/download)
* Clone o repositório: `git clone https://github.com/priscocleyton/api_crud.git`
* Depois acesse a pasta API_CRUD, `cd api_crud`
* Instale as dependências `composer install`
* Crie o arquivo de configuração de variáveis de ambiente `cp .env.example .env`
* Configure as variáveis de ambiente e a conexão com o banco de dados no arquivo .env
* Rode os seeders `php artisan migrate:fresh --seed`
* Rode `php artisan key:generate`
* Rode `php artisan serve` para iniciar o servidor.
* Acesse o API_CRUD pelo no navegador: http://localhost:8000 ou url que você configurar.

## Observações
* Usuário (ADMIN): 
    * email: priscocleyton@gmail.com 
     * senha: 123456
* Na Raiz do projeto contém os colletions com as endpoints para o insomia para teste.
