-- sa_02_crud_db

create table dados(
id_consulta int not null auto_increment primary key,
codigo int,
nome varchar(50),
valor double,
genero varchar(10),
excecao varchar(200),
data_procedimento date
);


 CREATE TABLE tbl_especialidade(
     id_cadastro INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nome_especialidade VARCHAR(50)
 );

CREATE TABLE tbl_paciente(
     id_paciente INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nome_paciente VARCHAR(50),
     rua VARCHAR(50),
     numero INT(5),
     complemento VARCHAR(50),
     bairro VARCHAR(50),
     cep INT(8),
     email VARCHAR(50),
     telefone INT(11)  
  );

create table funcionamento (
id_funcionamento int(5) primary key auto_increment not null,
abertura_clinica varchar (6),
fechamento_clinica VARCHAR(6),
media_consultas VARCHAR(6),
dias_funcionamento VARCHAR(20)
);

create table convenios(
id_convenio int(5) auto_increment primary key,
nome_fantasia varchar(40),
nome_empresa varchar(40),
cnpj char(14),
email varchar(40),
nome_cont varchar(40),
homepage varchar(40),
telefone char(15),
celular char(16),
endereco varchar(40),
numero varchar(10),
complemento varchar(40),
cidade varchar(40),
estado varchar(40),
cep varchar(15)
);

CREATE TABLE medicos (
	id_medico INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_medico VARCHAR(45) NOT NULL,
    rua_medico VARCHAR(45) NOT NULL,
    numero_medico VARCHAR(45) NOT NULL,
    complemento_medico VARCHAR(45) NOT NULL,
    bairro_medico VARCHAR(45) NOT NULL,
    cep_medico VARCHAR(45) NOT NULL,
    email_medico VARCHAR(45) NOT NULL,
    telefone_fixo_medico VARCHAR(45) NOT NULL
);