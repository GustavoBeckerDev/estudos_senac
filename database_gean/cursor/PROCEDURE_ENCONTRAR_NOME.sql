CREATE DATABASE cursor1;
USE cursor1;

-- DESATIVAR O MODO SAFE DO BANCO DE DADOS :
SET SQL_SAFE_UPDATES = 0;

-- TABELA TEMPORÁRIA = EXISTE DURANTE UM DETERMINADO PROCESSO, E DEPOIS AUTOMATICAMENTE DEIXA DE EXISTIR.
-- CRIA UMA TABELA QUE EXISTE NO BANCO DURANTE UMA SESSÃO (A PARTIR DO MOMENTO QUE ENCERRAR A SESSÃO, A TABELA É ELIMINADA).
-- É UMA TABELA ESPECIAL CRIADA APENAS PARA GUARDAR DADOS TEMPORÁRIOS.

/*
CREATE TEMPORARY TABLE temp_produtos (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
preco DECIMAL(10,2),
quantidade INT );

INSERT INTO temp_produtos (nome, preco, quantidade) VALUES 
('teclado', 50.00, 10),
('mouse', 35.00, 10),
('monitor', 150.00, 10); 

SELECT * FROM temp_produtos;

*/

CREATE TABLE clientes (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
cidade VARCHAR(100) NOT NULL);

INSERT INTO clientes (nome, cidade) VALUES
('gustavo', 'videira'),
('marcela', 'tangara');

	DELIMITER $$ 
	CREATE PROCEDURE exemplo_clientes ()

	BEGIN 

	CREATE TEMPORARY TABLE temp_clientes (
	nome VARCHAR(100));

	INSERT INTO temp_clientes (nome)
	SELECT nome FROM clientes WHERE cidade = trim(lower('videira'));

	SELECT * FROM temp_clientes;

	END$$
    
CALL exemplo_clientes();

SELECT * FROM temp_clientes;










