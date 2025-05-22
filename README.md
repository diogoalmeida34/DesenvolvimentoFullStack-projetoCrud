# CRUD Relacional com Laravel, MySQL e AdminLTE

Projeto desenvolvido como parte da disciplina **GRUFSST - Desenvolvimento Full-Stack**, com o objetivo de aplicar os conceitos de desenvolvimento web full-stack utilizando o framework Laravel no backend e o template AdminLTE no frontend.

---

## 🎯 Objetivo

Criar um sistema CRUD com relacionamentos entre entidades, usando boas práticas de desenvolvimento, autenticação, e uma interface administrativa moderna e responsiva.

---

## 🧰 Tecnologias Utilizadas

- **PHP 8+**
- **Laravel 10+**
- **MySQL**
- **AdminLTE 3**
- **Blade** (sistema de templates do Laravel)
- **Bootstrap 4** (integrado via AdminLTE)
- **Composer & NPM**

---

## ⚙️ Funcionalidades

- Autenticação de usuários
- CRUD completo com validações (Create, Read, Update, Delete)
- Relacionamentos entre tabelas:
  - Exemplo: `Usuários` → possuem vários `Posts`
  - `Posts` → pertencem a uma `Categoria`
- Listagens com paginação e filtros
- Painel administrativo com AdminLTE
- Migrações e seeders para facilitar testes

---

## 🧱 Estrutura do Projeto
```bash
app/
├── Models/
│ ├── User.php
│ ├── Post.php
│ └── Category.php
├── Http/
│ └── Controllers/
│ ├── PostController.php
│ └── CategoryController.php
resources/
└── views/
├── adminlte/
├── posts/
└── categories/
```
---

## 🛠️ Instalação e Configuração do Projeto

1. Clone o repositório
```bash
git clone https://github.com/diogoalmeida34/DesenvolvimentoFullStack-projetoCrud.git
cd DesenvolvimentoFullStack-projetoCrud
```

2. Instale as dependências (se necessário)
```bash
composer install
npm install && npm run dev
```

3. Configure o ambiente
Configure o arquivo `.env`:
Abra o arquivo `.env` e edite os dados de conexão com o banco:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

4. Inicie o servidor:

```bash
php artisan serve
```

Acesse no navegador: ```http://localhost:8000```

---

## 📜 Licença
Este projeto está licenciado sob a MIT License.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## Sobre o Laravel

O Laravel é um framework para aplicações web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa para ser verdadeiramente gratificante. O Laravel elimina a dor de cabeça do desenvolvimento, facilitando tarefas comuns usadas em muitos projetos web, como:

- [Mecanismo de roteamento simples e rápido](https://laravel.com/docs/routing).
- [Contêiner poderoso para injeção de dependências](https://laravel.com/docs/container).
- Múltiplos back-ends para armazenamento de [sessão](https://laravel.com/docs/session) e [cache](https://laravel.com/docs/cache).
- [ORM de banco de dados](https://laravel.com/docs/eloquent) expressivo e intuitivo.
- [Migrações de esquemas](https://laravel.com/docs/migrations) agnóstico em relação a bancos de dados.

- [Processamento robusto de tarefas em segundo plano](https://laravel.com/docs/queues).
- [Transmissão de eventos em tempo real](https://laravel.com/docs/broadcasting).

O Laravel é acessível, poderoso e fornece as ferramentas necessárias para aplicações grandes e robustas.
