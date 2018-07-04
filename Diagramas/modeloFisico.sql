-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

create schema estoque;

use estoque;

CREATE TABLE Analista (
IdAnalista double PRIMARY KEY AUTO_INCREMENT,
MatriculaAnalista varchar(8),
NomeAnalista varchar(40),
SenhaAnalista varchar(40)
);

CREATE TABLE Software (
IdSoftware double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
NomeSoftware varchar(20),
VersaoSoftware varchar(20),
SerialSoftware varchar(40)
);

CREATE TABLE Fabricante (
IdFabricante double PRIMARY KEY AUTO_INCREMENT,
NomeFabricante varchar(20)
);

CREATE TABLE Movimentacao (
IdMovimentacao double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
IdAnalista double,
TipoMovimentacao varchar(20),
DataMovimentacao date,
MatriculaUsuario varchar(8),
FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
);

CREATE TABLE Computador (
IdComp double PRIMARY KEY AUTO_INCREMENT,
IdModelo double,
SerialComp varchar(40),
HostnameComp varchar(20),
StatusComp varchar(20),
ObservacaoComp varchar(250)
);

CREATE TABLE Modelo (
IdModelo double PRIMARY KEY AUTO_INCREMENT,
IdFabricante double,
IdTipo double,
NomeModelo varchar(20),
FOREIGN KEY(IdFabricante) REFERENCES Fabricante (IdFabricante)
);

CREATE TABLE Tipo (
IdTipo double PRIMARY KEY AUTO_INCREMENT,
NomeTipo varchar(20)
);

ALTER TABLE Software ADD CONSTRAINT FOREIGN KEY(IdComp) REFERENCES Computador (IdComp);
ALTER TABLE Movimentacao ADD CONSTRAINT FOREIGN KEY(IdComp) REFERENCES Computador (IdComp);
ALTER TABLE Computador ADD CONSTRAINT FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo);
ALTER TABLE Modelo ADD CONSTRAINT FOREIGN KEY(IdTipo) REFERENCES Tipo (Idtipo);

insert into analista values ('', 'cs261967', 'Gabriel', sha1('9F90amv8'));
select * from analista;

ALTER TABLE analista ADD remember_token varchar(60);