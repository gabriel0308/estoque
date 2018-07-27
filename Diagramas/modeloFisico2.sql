-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.

create schema estoque;

use estoque;

CREATE TABLE Fabricante (
IdFabricante double PRIMARY KEY AUTO_INCREMENT,
NomeFabricante varchar(20)
);

CREATE TABLE Tipo (
Idtipo double PRIMARY KEY,
NomeTipo varchar(20)
);

CREATE TABLE Movimentacao (
IdMovimentacao double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
IdAnalista double,
TipoMovimentacao varchar(20),
DataMovimentacao date,
MatriculaUsuario varchar(8)
);

CREATE TABLE Software (
IdSoftware double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
NomeSoftware varchar(20),
VersaoSoftware varchar(20),
SerialSoftware varchar(40)
);

CREATE TABLE Modelo (
IdModelo double PRIMARY KEY AUTO_INCREMENT,
IdFabricante double,
IdTipo double,
NomeModelo varchar(20),
FOREIGN KEY(IdFabricante) REFERENCES Fabricante (IdFabricante),
FOREIGN KEY(IdTipo) REFERENCES Tipo (Idtipo)
);

CREATE TABLE Periferico (
IdPeriferico double PRIMARY KEY AUTO_INCREMENT,
IdModelo double,
StatusPeriferico Varchar(20),
FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo)
);

CREATE TABLE MovPeriferico (
IdMovPeriferico double PRIMARY KEY AUTO_INCREMENT,
IdPeriferico double,
IdAnalista double,
TipoMovPeriferico Varchar(20),
DataMovPeriferico date,
MatriculaUsuario varchar(8),
FOREIGN KEY(IdPeriferico) REFERENCES Periferico (IdPeriferico)
);

CREATE TABLE Analista (
IdAnalista double PRIMARY KEY AUTO_INCREMENT,
MatriculaAnalista varchar(8),
NomeAnalista varchar(40),
SenhaAnalista varchar(40),
remember_token varchar(60),
guard varchar(10)
);

CREATE TABLE Computador (
IdComp double PRIMARY KEY AUTO_INCREMENT,
IdModelo double,
IdAnalista double,
SerialComp varchar(40),
HostnameComp varchar(20),
StatusComp varchar(20),
ObservacaoComp varchar(250),
LacreComp varchar(8),
FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo),
FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
);

ALTER TABLE Movimentacao ADD FOREIGN KEY(IdComp) REFERENCES Computador (IdComp);
ALTER TABLE Movimentacao ADD FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista);
ALTER TABLE Software ADD FOREIGN KEY(IdComp) REFERENCES Computador (IdComp);
ALTER TABLE MovPeriferico ADD FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista);

insert into analista values ('', 'cs261967', 'Gabriel', sha1('9F90amv8'), '', 'Admin');
select * from analista;