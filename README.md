# Todo API

## Visão Geral
A Todo API é um serviço web RESTful para gerenciar uma lista simples de tarefas (todos). Ela permite que os usuários criem, leiam, atualizem e excluam tarefas de maneira eficiente e fácil de usar.

## Recursos
- Criar novas tarefas
- Recuperar uma lista de tarefas
- Atualizar tarefas existentes
- Excluir tarefas

## Tecnologias Utilizadas
- Laravel
- MySQL
- Git

## Primeiros Passos

### Pré-requisitos
- PHP >= 7.3
- Composer
- MySQL ou SQLite
- Laravel

### Instalação
1. Clone o repositório:
`git clone https://github.com/seuusuario/todo-api.git`

2. Navegue até o diretório do projeto:
`cd api`

3. Instale as dependências:
`composer install`

4. Configure suas variáveis de ambiente:
- Copie `.env.example` para `.env`
- Atualize a configuração do banco de dados e outras no `.env`

5. Gere a chave da aplicação:
`php artisan key:generate`

6. Execute as migrações:
`php artisan migrate`

7. Inicie o servidor:
`php artisan serve`


## Endpoints da API

| Método | Endpoint          | Descrição                |
| ------ | ----------------- | ------------------------ |
| POST   | /api/todos        | Criar uma nova tarefa    |
| GET    | /api/todos        | Recuperar todas as tarefas |
| GET    | /api/todos/{id}   | Recuperar uma única tarefa |
| PUT    | /api/todos/{id}   | Atualizar uma tarefa existente |
| DELETE | /api/todos/{id}   | Excluir uma tarefa        |
