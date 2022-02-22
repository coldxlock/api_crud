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

Esse projeto é um CRUD de Categorias e de Usuários utilizando ACL e Sanctum como autenticação feito em [Laravel](http://laravel.com), onde é possível criar usuários e atribuir permissiões aos mesmos.

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
* Acesse o API_CRUD no navegador: http://localhost:8000 ou url que você configurar.

## Endpoints

Requisições | Urls | Descrição | Parâmetros (headers)| Descrição no Collection | 
--- | --- | --- | ---| ---
 POST | http://localhost:8000/register | Retorna dados do usuário logado |  | CREATE USER  |
 POST | http://localhost:8000/users/permissions | Cria permissões para um usuário | `` Bearer {{ access_token }} `` | CREATE  PERMISSION USER |
 GET | http://localhost:8000/categories | Lista todas as categorias | `` Bearer {{ access_token }} `` | LIST ALL CATEGORIES |
 GET | http://localhost:8000/categories/{id} | Lista categoria pelo id | `` Bearer {{ access_token }} `` | LIST CATEGORY BY ID |
 POST | http://localhost:8000/categories | Cria Categoria | `` Bearer {{ access_token }} `` | CREATE CATEGORY |
 DELETE | http://localhost:8000/categories/{id} | Deletar categoria pelo id | `` Bearer {{ access_token }} `` | DELETE CATEGORY |
 PUT | http://localhost:8000/categories/{id} | Atualiza categoria pelo id | `` Bearer {{ access_token }} `` | UPDATE CATEGORY |
 POST | http://localhost:8000/auth | Autenticação de login na API |  | USER AUTH |
 GET | http://localhost:8000/me | Mostra dados do usuário logado | `` Bearer {{ access_token }} `` | USER ME |
 GET | http://localhost:8000/logout | Retorna dados do usuário logado | `` Bearer {{ access_token }} `` | USER LOGOUT |
 GET | http://localhost:8000/users | Retorna todos os usuários cadastrados | `` Bearer {{ access_token }} `` | USERS |
 GET | http://localhost:8000/resources | Retorna todos os detalhes das permissões | `` Bearer {{ access_token }} `` | RESOURCE |
 GET | http://localhost:8000/users/{identify}/permissions | Verifica as permissões de um usuário | `` Bearer {{ access_token }} `` | USER PERMISSION |
 GET | http://localhost:8000/users/{identify} | Retorna dados de um usuário pelo identify | `` Bearer {{ access_token }} `` | USER BY IDENTIFY |
 PUT | http://localhost:8000/users/{identify} | Atualiza os dados de um usuário pelo identify | `` Bearer {{ access_token }} `` | USER |
 DELETE | http://localhost:8000/users/{identify} | Exclui um usuário pelo identify | `` Bearer {{ access_token }} `` | USER |

### Exemplo:
<img src="https://uploaddeimagens.com.br/images/003/739/569/full/API_PRINT_2.png?1645505918" >

## Observações
* Apenas o usuário admin é criado no projeto por padrão. Os demais usuários precisam ser criados e depois atribuidos permissões, pois o usuário é criado sem permissão por padrão.
* Utilize as rotas ``http://localhost:8000/register (post)`` para criar usuário e ``http://localhost:8000/users/permissions (post)`` para atribuir permissões. Lembrando que no collection do insomnia na raiz do projeto já contém tudo, é so importar.
* Usuário (ADMIN): 
    * email: priscocleyton@gmail.com 
     * senha: 123456
* Na Raiz do projeto contém os collections com as endpoints para o insomia para teste.
