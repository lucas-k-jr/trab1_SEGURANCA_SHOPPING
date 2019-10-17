DROP DATABASE IF EXISTS SEGURANCA_SHOPPING;
CREATE DATABASE IF NOT EXISTS SEGURANCA_SHOPPING;
USE SEGURANCA_SHOPPING;

CREATE TABLE IF NOT EXISTS Estado(
    ID_Estado VARCHAR(25) NOT NULL PRIMARY KEY,
    Nome VARCHAR(25)
);
CREATE TABLE IF NOT EXISTS Cidade(
    ID_Cidade VARCHAR(25) NOT NULL PRIMARY KEY,
    Nome VARCHAR(25),
    FOREIGN KEY (Cod_Estado)
        REFERENCES Estado(ID_Estado)
            ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS Seguranca(
    ID_Seguranca INT NOT NULL PRIMARY KEY, 
    Nome VARCHAR(25),
    Sobrenome VARCHAR(25),
    Sexo NVARCHAR(25),
    Email VARCHAR(50),
    Data_Nascimento VARCHAR(25),
    Cod_Cidade VARCHAR(25),
    FOREIGN KEY (Cod_Cliente)
        REFERENCES Cidade(ID_Cidade)
            ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE IF NOT  EXISTS Companhia(
    ID_Companhia INT NOT NULL PRIMARY KEY,
    Nome VARCHAR(25),
    Cod_Cidade VARCHAR(25),
    FOREIGN KEY (Cod_Cidade)
        REFERENCES  Cidade(ID_Cidade)
            ON UPDATE CASCADE ON DELETE CASCADE
        
);
CREATE TABLE IF NOT  EXISTS Shopping(
    ID_Shopping INT NOT NULL PRIMARY KEY,
    Nome VARCHAR(25)
);
CREATE TABLE IF NOT  EXISTS Segurança_Companhia_Shopping(
    Cod_Seguranca INT NOT NULL,
    Cod_Companhia INT NOT NULL,
    Cod_Shopping INT NOT NULL,
    primary key(Cod_Seguranca, Cod_Companhia, Cod_Shopping),
    FOREIGN KEY (Cod_Seguranca)
        REFERENCES  Seguranca(ID_Seguranca)
            ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (Cod_Companhia)
		REFERENCES  Companhia(ID_Companhia)
            ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (Cod_Shopping)
        REFERENCES  Shopping(ID_Shopping)
            ON UPDATE CASCADE ON DELETE CASCADE
);
SHOW TABLES;
INSERT INTO SEGURANCA VALUES (1, 'Roberto', 'stengehr','masculino', 'stengehr@hotmail', '1998/06/17', 'AC-RJ');
select * from seguranca;