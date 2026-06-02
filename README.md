# Atividade CRUD 01 - Introdução
## Sistema de Login Simples em PHP

## Objetivo da Aplicação

Este projeto foi desenvolvido com o objetivo de realizar o cadastro e gerenciamento de usuários utilizando PHP e banco de dados MySQL. O sistema permite fazer login, cadastrar novos usuários, listar os usuários cadastrados e realizar logout da sessão.


## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- XAMPP


## Estrutura Básica dos Arquivos

### `index.php`
Arquivo responsável pela tela de login do sistema.

### `home.php`
Página principal do sistema. Permite cadastrar novos usuários e visualizar os usuários cadastrados.

### `conexao_db.php`
Conexão entre o sistema e o banco de dados MySQL.

### `tabela.php`
Arquivo responsável por exibir a tabela com os usuários cadastrados no banco.

### `logout.php`
Responsável por encerrar a sessão do usuário e retornar para a tela de login.


## Explicação Geral Sobre o Funcionamento do Código

O sistema inicia verificando se o usuário está autenticado através de sessões em PHP. Após o login, o usuário é direcionado para a página principal.

Na página principal, existe um formulário para cadastrar novos usuários. Os dados digitados são enviados para o banco de dados utilizando os comandos SQL.

Também mostra uma tabela com todos os usuários cadastrados no banco de dados. O sistema utiliza a conexão com o MySQL para buscar e mostrar essas informações.

Ao clicar em “Sair”, a sessão é destruída e o usuário retorna para a tela de login.


## Principais Aprendizados Obtidos

Durante o desenvolvimento e análise do sistema, aprendemos:

- Como utilizar sessões em PHP;
- Como conectar PHP com banco de dados MySQL;
- Como realizar consultas SQL;
- Como inserir dados no banco de dados;
- Como exibir informações dinamicamente em tabelas;
- Organização básica de arquivos em um projeto PHP;
- Importância dos comentários no código para facilitar o entendimento.
