# Sistema de Banco Simples

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

# Funcionalidades do sistema

## O sistema consiste em utilizar seguintes telas

* Formulário de cadastro e edição de contas.
* Formulário para movimentação de deposito e retirada.
* Listagem com filtros.
* Relatórios em PDF com paginação(Em refatoração devido o volume de dados).
* Migrações para controle da estrutura do banco de dados.

## Desenvolvimento

Um pequeno módulo feito para um projeto ERP.

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
* [DomPDF](https://github.com/barryvdh/laravel-dompdf) - DomPDF para Laravel 5+
* [Composer](https://getcomposer.org/) - Gerenciador de pacotes

### Desenvolvedor
* Yuri Neves(https://github.com/yurineves92)


