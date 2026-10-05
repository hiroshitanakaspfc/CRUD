# 🏢 Sistema de Gerenciamento de Funcionários - CRUD

Projeto de desenvolvimento de um sistema CRUD para gestão de funcionários, desenvolvido como atividade prática do curso no **SENAI**.

---

## 👥 Integrantes da Dupla

- **Luiz Hiroshi Tanaka**
- **João Mana**

---

## 📌 Sobre o Projeto

O objetivo do projeto foi criar um sistema funcional de cadastro, consulta e alteração de funcionários de uma empresa, utilizando como base a estrutura e os conceitos apresentados pelo professor em aula.

> 💡 **Nota de Desenvolvimento:** Toda a estrutura lógica (PHP, SQL e integração com o banco de dados) foi desenvolvida pela dupla com autonomia. A Inteligência Artificial foi utilizada como ferramenta de auxílio para o aprimoramento do design e estilo visual (CSS) e para a revisão de segurança do código (uso de consultas preparadas e proteção contra SQL Injection e XSS).

---

## 🛠️ Tecnologias Utilizadas

- **HTML5** — Estruturação dos formulários e páginas.
- **CSS3** — Estilização visual da interface.
- **PHP** — Lógica de programação do sistema e integração com o banco de dados.
- **MySQL / MariaDB** — Banco de dados relacional.

---

## 🗄️ Estrutura do Banco de Dados

- **Nome do Banco de Dados:** `Empresa`
- **Nome da Tabela:** `Funcionarios`

### Campos da Tabela (`Funcionarios`)

| Campo          | Tipo de Dado                      | Descrição                          |
| -------------- | --------------------------------- | ---------------------------------- |
| `idFunc`       | INT (Primary Key, Auto Increment) | Identificador único do funcionário |
| `nome`         | VARCHAR(50)                       | Nome completo                      |
| `matricula`    | VARCHAR(20)                       | Número de matrícula do colaborador |
| `funcao`       | VARCHAR(50)                       | Cargo / Função exercida            |
| `departamento` | VARCHAR(50)                       | Setor/Departamento na empresa      |
| `idade`        | VARCHAR(50)                       | Idade do funcionário               |
| `cpf`          | VARCHAR(50)                       | CPF do funcionário                 |
| `rg`           | VARCHAR(20)                       | RG do funcionário                  |
| `salario`      | DECIMAL(8,2)                      | Salário do funcionário             |
| `endereco`     | VARCHAR(50)                       | Endereço residencial               |
| `uf`           | VARCHAR(50)                       | Estado (Unidade Federativa)        |
| `pais`         | VARCHAR(50)                       | País de residência                 |

---

## 🚀 Funcionalidades

- [x] **Create (Cadastro):** Formulário completo para inclusão de novos funcionários no banco de dados.
- [x] **Read (Consulta):** Busca de funcionários por nome.
- [x] **Update (Alteração):** Busca do funcionário pelo CPF e edição dos dados cadastrados.
- [ ] **Delete (Exclusão):** Ainda não implementado.

---

## ⚙️ Como Executar o Projeto

1. Certifique-se de ter um servidor local ativo (como **XAMPP**, **WAMP** ou **Laragon**).
2. Importe o arquivo `empresa.sql` (pasta `banco`) para o seu **MySQL / phpMyAdmin**.
3. Mova os arquivos do projeto para a pasta `htdocs` (ou equivalente do seu servidor).
4. Abra os arquivos `cadastro.php`, `consult-dados.php`, `form.alterar.php` e `salvar-alteracao.php` e troque `SUA_SENHA` pela senha do **seu** usuário MySQL (e o usuário `root`, se for outro).
5. Abra o navegador e acesse: `http://localhost/[nome-da-pasta]/cadastro.html`.

> ⚠️ **Aviso:** os arquivos PHP deste repositório usam uma senha genérica (`SUA_SENHA`) de propósito. Nunca envie a senha real do seu banco para o GitHub.
