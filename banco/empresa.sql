CREATE DATABASE Empresa;
use Empresa;
	create table Funcionarios(
	idFunc int auto_increment primary key,
    nome varchar (50) not null,
    matricula varchar (20) not null,
    Funcao varchar(50) not null,
    departamento varchar (50) not null,
	idade varchar (50) not null,
    cpf varchar (50) not null,
    rg varchar (11) not null,
    salario decimal (8.2) not null,
    endereco varchar (50) not null,
    uf varchar (50) not null,
    pais varchar (50)
    );
    
