# Sistema de Controle de Contas (Depósito e Retirada)

Controle suas transações do seus gastos e construa relatórios filtrados.

## Começando

```
Criar um cópia do arquivo env.example para .env (Ambiente de Teste)
```
Esse passo é importante dependendo onde você está rodando o projeto se for local é bom usar o .env caso em produção configurar no config/database.php

```
php artisan migrate
```

Executar o comando para rodar a migrations para criação das tabelas no banco de dados.

## Funcionalidades do sistema

* Formulário de cadastro e edição de contas.
* Formulário para movimentação de deposito e retirada.
* Listagem com filtros.
* Relatórios em PDF com paginação.
* Migrações para controle da estrutura do banco de dados.

## Desenvolvimento

Um pequeno módulo feito para um projeto ERP.

## Postagens para ajuda

https://laravelcode.com/post/html-to-pdf-in-laravel-using-barryvdh-laravel-snappy

### Pré-requisitos

O que você precisa?
* PHP 7+
* MySQL ou PostgreSQL
* [SublimeTEXT](https://www.sublimetext.com/) - Editor de Texto
* [Visual Studio Code](https://code.visualstudio.com/) - IDE
* [Composer](https://getcomposer.org/) - Gerenciador de pacotes

### Ferramentas usadas

* PHP 7+
* MySQL
* [Laravel](https://laravel.com/) - Laravel 6.0
* [Wkhtmltopdf](https://github.com/barryvdh/laravel-snappy) - Wkhtmltopdf para Laravel 5+
* [Composer](https://getcomposer.org/) - Gerenciador de pacotes

### Desenvolvedor
* Yuri Neves(https://github.com/yurineves92)


