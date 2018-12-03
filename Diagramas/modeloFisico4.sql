-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.

CREATE schema estoque;

use estoque;

CREATE TABLE Modelo (
IdModelo double PRIMARY KEY AUTO_INCREMENT,
IdFabricante double,
IdTipo double,
NomeModelo varchar(20)
);

CREATE TABLE MovPeriferico (
IdMovPeriferico double PRIMARY KEY AUTO_INCREMENT,
IdPeriferico double,
IdAnalista double,
IdTicket double,
TipoMovPeriferico Varchar(20),
DataMovPeriferico timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Analista (
IdAnalista double PRIMARY KEY AUTO_INCREMENT,
MatriculaAnalista varchar(8),
NomeAnalista varchar(40),
SenhaAnalista varchar(40),
remember_token varchar(60),
guard varchar(10)
);

CREATE TABLE Fabricante (
IdFabricante double PRIMARY KEY AUTO_INCREMENT,
NomeFabricante varchar(20)
);

CREATE TABLE Tipo (
IdTipo double PRIMARY KEY AUTO_INCREMENT,
NomeTipo varchar(20)
);

CREATE TABLE Periferico (
IdPeriferico double PRIMARY KEY AUTO_INCREMENT,
StatusPeriferico Varchar(20),
IdModeloPeriferico double
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
DataCadastroComp timestamp DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo),
FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
);

CREATE TABLE Software (
IdSoftware double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
NomeSoftware varchar(20),
VersaoSoftware varchar(20),
SerialSoftware varchar(40),
FOREIGN KEY(IdComp) REFERENCES Computador (IdComp)
);

CREATE TABLE Movimentacao (
IdMovimentacao double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
IdAnalista double,
IdTicket double,
TipoMovimentacao varchar(20),
DataMovimentacao timestamp DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(IdComp) REFERENCES Computador (IdComp),
FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
);

CREATE TABLE Ticket (
IdTicket double PRIMARY KEY AUTO_INCREMENT,
MatriculaUsuario varchar(8),
RamalUsuario varchar(15),
DepartamentoUsuario Varchar(30),
UnidadeUsuario varchar(30)
);

CREATE TABLE ModeloPeriferico (
IdModeloPeriferico double PRIMARY KEY AUTO_INCREMENT,
NomeModeloPeriferico Varchar(20),
IdFabricante double,
IdTipo double,
FOREIGN KEY(IdFabricante) REFERENCES Fabricante (IdFabricante),
FOREIGN KEY(IdTipo) REFERENCES Tipo (IdTipo)
);

ALTER TABLE Modelo ADD FOREIGN KEY(IdFabricante) REFERENCES Fabricante (IdFabricante);
ALTER TABLE Modelo ADD FOREIGN KEY(IdTipo) REFERENCES Tipo (IdTipo);
ALTER TABLE MovPeriferico ADD FOREIGN KEY(IdPeriferico) REFERENCES Periferico (IdPeriferico);
ALTER TABLE MovPeriferico ADD FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista);
ALTER TABLE MovPeriferico ADD FOREIGN KEY(IdTicket) REFERENCES Ticket (IdTicket);
ALTER TABLE Periferico ADD FOREIGN KEY(IdModeloPeriferico) REFERENCES ModeloPeriferico (IdModeloPeriferico);
ALTER TABLE Movimentacao ADD FOREIGN KEY(IdTicket) REFERENCES Ticket (IdTicket);
