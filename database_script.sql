/*Criando o banco de dados*/
create database bemol_omni;
/*selecionando o banco criado*/
use bemol_omni;

/*criando tabela de clientes*/
create table Cliente(
Id int(11) primary key auto_increment,
Nome varchar(250) not null,
CPF varchar(14) not null,
Email varchar(250) not null,
Senha varchar(50),
CEP varchar(10),
Logradouro varchar(250),
Complemento varchar(250),  
Bairro varchar(250),
Cidade varchar(100),
UF varchar(2),
/*campos para auditoria*/
Data_Cadastro date,
Ultima_Alteracao date,
Ultimo_Acesso datetime
);
