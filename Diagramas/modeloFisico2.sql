-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Fabricante (
IdFabricante double PRIMARY KEY,
NomeFabricante varchar(20)
)

CREATE TABLE Tipo (
Idtipo double PRIMARY KEY,
NomeTipo varchar(20)
)

CREATE TABLE Movimentacao (
IdMovimentacao double PRIMARY KEY,
IdComp double,
IdAnalista double,
TipoMovimentacao varchar(20),
DataMovimentacao date,
MatriculaUsuario varchar(8)
)

CREATE TABLE Software (
IdSoftware double PRIMARY KEY,
IdComp double,
NomeSoftware varchar(20),
VersaoSoftware varchar(20),
SerialSoftware varchar(40)
)

CREATE TABLE Computador (
IdComp double PRIMARY KEY,
IdModelo double,
SerialComp varchar(40),
HostnameComp varchar(20),
StatusComp varchar(20),
ObservacaoComp varchar(250),
LacreComp varchar(8)
)

CREATE TABLE Analista (
IdAnalista double PRIMARY KEY,
MatriculaAnalista varchar(8),
NomeAnalista varchar(40),
SenhaAnalista varchar(20),
remember_token varchar(60),
guard varchar(10)
)

CREATE TABLE Modelo (
IdModelo double PRIMARY KEY,
IdFabricante double,
IdTipo double,
NomeModelo varchar(20),
FOREIGN KEY(IdFabricante) REFERENCES Fabricante (IdFabricante),
FOREIGN KEY(IdTipo) REFERENCES Tipo (Idtipo)
)

CREATE TABLE Periferico (
IdPeriferico double PRIMARY KEY,
IdModelo double,
StatusPeriferico Varchar(20),
FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo)
)

CREATE TABLE MovPeriferico (
IdMovPeriferico double PRIMARY KEY,
IdPeriferico double,
IdAnalista double,
TipoMovPeriferico Varchar(20),
DataMovPeriferico date,
MatriculaUsuario varchar(8),
FOREIGN KEY(IdPeriferico) REFERENCES Periferico (IdPeriferico),
FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
)

ALTER TABLE Movimentacao ADD FOREIGN KEY(IdComp) REFERENCES Computador (IdComp)
ALTER TABLE Movimentacao ADD FOREIGN KEY(IdAnalista) REFERENCES Analista (IdAnalista)
ALTER TABLE Software ADD FOREIGN KEY(IdComp) REFERENCES Computador (IdComp)
ALTER TABLE Computador ADD FOREIGN KEY(IdModelo) REFERENCES Modelo (IdModelo)
