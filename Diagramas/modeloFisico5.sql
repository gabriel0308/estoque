-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE schema estoque;

use estoque;

CREATE TABLE computador (
IdComp double PRIMARY KEY AUTO_INCREMENT,
IdModelo double,
IdAnalista double,
SerialComp varchar(40),
HostnameComp varchar(20),
StatusComp varchar(20),
ObservacaoComp varchar(250),
LacreComp varchar(8),
DataCadastroComp timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE software (
IdSoftware double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
NomeSoftware varchar(20),
VersaoSoftware varchar(20),
SerialSoftware varchar(40),
FOREIGN KEY(IdComp) REFERENCES computador (IdComp)
);

CREATE TABLE analista (
IdAnalista double PRIMARY KEY AUTO_INCREMENT,
MatriculaAnalista varchar(8),
NomeAnalista varchar(40),
SenhaAnalista varchar(40),
remember_token varchar(60),
guard varchar(10)
);

CREATE TABLE ticket (
IdTicket double PRIMARY KEY AUTO_INCREMENT,
MatriculaUsuario varchar(8),
RamalUsuario varchar(15),
DepartamentoUsuario Varchar(30),
UnidadeUsuario varchar(30),
NumeroTicket double
);

CREATE TABLE movPeriferico (
IdMovPeriferico double PRIMARY KEY AUTO_INCREMENT,
IdPeriferico double,
IdAnalista double,
IdTicket double,
TipoMovPeriferico Varchar(20),
DataMovPeriferico timestamp DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(IdAnalista) REFERENCES analista (IdAnalista),
FOREIGN KEY(IdTicket) REFERENCES ticket (IdTicket)
);

CREATE TABLE movimentacao (
IdMovimentacao double PRIMARY KEY AUTO_INCREMENT,
IdComp double,
IdAnalista double,
IdTicket double,
TipoMovimentacao varchar(20),
DataMovimentacao timestamp DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(IdComp) REFERENCES computador (IdComp),
FOREIGN KEY(IdAnalista) REFERENCES analista (IdAnalista),
FOREIGN KEY(IdTicket) REFERENCES ticket (IdTicket)
);

CREATE TABLE modelo (
IdModelo double PRIMARY KEY AUTO_INCREMENT,
IdFabricante double,
IdTipo double,
NomeModelo varchar(20)
);

CREATE TABLE tipo (
IdTipo double PRIMARY KEY AUTO_INCREMENT,
NomeTipo varchar(20)
);

CREATE TABLE fabricante (
IdFabricante double PRIMARY KEY AUTO_INCREMENT,
NomeFabricante varchar(20)
);

CREATE TABLE modeloPeriferico (
IdModeloPeriferico double PRIMARY KEY AUTO_INCREMENT,
NomeModeloPeriferico Varchar(20),
IdFabricantePeriferico double,
IdTipoPeriferico double
);

CREATE TABLE periferico (
IdPeriferico double PRIMARY KEY AUTO_INCREMENT,
StatusPeriferico Varchar(20),
IdModeloPeriferico double,
FOREIGN KEY(IdModeloPeriferico) REFERENCES modeloPeriferico (IdModeloPeriferico)
);

CREATE TABLE tipoPeriferico (
IdTipoPeriferico double PRIMARY KEY AUTO_INCREMENT,
NomeTipoPeriferico varchar(20)
);

CREATE TABLE fabricantePeriferico (
IdFabricantePeriferico double PRIMARY KEY AUTO_INCREMENT,
NomeFabricantePeriferico varchar(20)
);

ALTER TABLE computador ADD FOREIGN KEY(IdModelo) REFERENCES modelo (IdModelo);
ALTER TABLE computador ADD FOREIGN KEY(IdAnalista) REFERENCES analista (IdAnalista);
ALTER TABLE movPeriferico ADD FOREIGN KEY(IdPeriferico) REFERENCES periferico (IdPeriferico);
ALTER TABLE modelo ADD FOREIGN KEY(IdFabricante) REFERENCES fabricante (IdFabricante);
ALTER TABLE modelo ADD FOREIGN KEY(IdTipo) REFERENCES tipo (IdTipo);
ALTER TABLE modeloPeriferico ADD FOREIGN KEY(IdFabricantePeriferico) REFERENCES fabricantePeriferico (IdFabricantePeriferico);
ALTER TABLE modeloPeriferico ADD FOREIGN KEY(IdTipoPeriferico) REFERENCES tipoPeriferico (IdTipoPeriferico);

insert INTO analista (MatriculaAnalista, NomeAnalista, SenhaAnalista, guard) values ( 'cs261967', 'Gabriel', sha1('9F90amv8'), 'admin');
select * from analista;
