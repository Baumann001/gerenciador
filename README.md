# ✅ Gerenciador de Tarefas

Sistema web para organizar tarefas por usuário, com prioridade, setor e status.

## Funcionalidades
- Cadastro de **usuários** (com verificação de e-mail já cadastrado)
- CRUD completo de **tarefas**: criar, listar, editar e excluir
- Prioridade (baixa, média, alta) e status (a fazer, fazendo, pronto)
- Setor responsável e data de cadastro de cada tarefa

## Tecnologias
- PHP
- MySQL
- HTML e CSS

## Banco de dados
Tabelas `usuarios` e `tarefa` (script em [`db.sql`](db.sql)).

## Como executar
1. Instale o [XAMPP](https://www.apachefriends.org/) (Apache + MySQL).
2. Clone este repositório dentro da pasta `htdocs`.
3. No phpMyAdmin, importe o arquivo `db.sql`.
4. Confira os dados de conexão em `db.php`.
5. Acesse `http://localhost/gerenciador/tarefa/read_tarefa.php`.

---
Desenvolvido por [Gustavo Baumann](https://www.linkedin.com/in/gustavo-baumann-92b1442a1/).
