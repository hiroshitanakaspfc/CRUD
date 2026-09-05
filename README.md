# 🏢 Sistema de Gerenciamento de Funcionários - CRUD

Projeto de desenvolvimento de um sistema CRUD completo para gestão de funcionários, desenvolvido como atividade prática do curso no **SENAI**.

---

## 👥 Integrantes da Dupla

- **Luiz Hiroshi Tanaka**
- **João Mana**

---

## 📌 Sobre o Projeto

O objetivo do projeto foi criar um sistema funcional de cadastro, consulta, alteração e exclusão (CRUD) de funcionários de uma empresa, utilizando como base a estrutura e os conceitos apresentados pelo professor em aula.

> 💡 **Nota de Desenvolvimento:** Toda a estrutura lógica (PHP, SQL e integração com o banco de dados) foi desenvolvida pela dupla com autonomia. A Inteligência Artificial foi utilizada como ferramenta de auxílio para o aprimoramento do design e estilo visual (CSS).

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

| Campo | Tipo de Dado | Descrição |
| :--- | :--- | :--- |
| `idFunc` | INT (Primary Key, Auto Increment) | Identificador único do funcionário |
| `nome` | VARCHAR | Nome completo |
| `matricula` | VARCHAR / INT | Número de matrícula do colaborador |
| `funcao` | VARCHAR | Cargo / Função exercida |
| `departamento` | VARCHAR | Setor/Departamento na empresa |
| `idade` | INT | Idade do funcionário |
| `cpf` | VARCHAR | CPF do funcionário |
| `rg` | VARCHAR | RG do funcionário |
| `salario` | DECIMAL(10,2) | Salário do funcionário |
| `endereco` | VARCHAR | Endereço residencial |
| `uf` | VARCHAR(2) | Estado (Unidade Federativa) |
| `pais` | VARCHAR | País de residência |

---

## 🚀 Funcionalidades (CRUD)

- [x] **Create (Cadastro):** Formulário completo para inclusão de novos funcionários no banco de dados.
- [x] **Read (Consulta):** Listagem e busca dos dados cadastrados no sistema.
- [x] **Update (Alteração):** Edição dos dados de funcionários já cadastrados.
- [x] **Delete (Exclusão):** Remoção de registros de funcionários do banco de dados.

---

## ⚙️ Como Executar o Projeto

1. Certifique-se de ter um servidor local ativo (como **XAMPP**, **WAMP** ou **Laragon**).
2. Importe o arquivo `empresa.sql` para o seu **MySQL / phpMyAdmin**.
3. Mova os arquivos do projeto para a pasta `htdocs` (ou equivalente do seu servidor).
4. Abra o navegador e acesse: `http://localhost/[nome-da-pasta]`.
