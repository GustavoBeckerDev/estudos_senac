CREATE DATABASE atividade_procedure;
USE atividade_procedure;

CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
);

INSERT INTO produtos (nome, preco, estoque) VALUES
('Teclado RGB', 45.00, 20),
('Mouse RGB', 23.00, 10),
('Monitor Gamer', 120.00, 10);

-- PROCEDURE FUNCTION PARA ATUALIZAR O ESTOQUE :

DELIMITER $$ 
CREATE PROCEDURE p_arruma_estoque (
IN p_id_produto INT,
IN p_novo_estoque INT)

BEGIN 
UPDATE produtos SET estoque = p_novo_estoque
WHERE id = p_id_produto;

END$$

-- CHAMANDO A PROCEDURE :

select * from produtos;

CALL p_arruma_estoque (1, 50);

-- ------------------------------------------------------------------------------------------------

-- DELIMITER FUNCTION PARA INCREMENTAR ESTOQUE :

DELIMITER $$ 
CREATE PROCEDURE p_incrementa_estoque (
IN p_id_produto INT,     -- IN : PARÂMETRO DE ENTRADA
IN p_novo_estoque INT)   -- IN : PARÂMETRO DE ENTRADA

BEGIN 

UPDATE produtos
SET estoque = estoque + p_novo_estoque
WHERE id = p_id_produto;

END$$

select * from produtos;
CALL p_incrementa_estoque (1, 10);

-- -------------------------------------------------------------------------------------------------

CREATE TABLE clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO clientes (nome, email) VALUES
('Ana Silva', 'ana.silva@email.com'),
('Bruno Costa', 'bruno.costa@email.com');

-- DELIMITER FUNCTION PARA 

DELIMITER $$ 
CREATE PROCEDURE p_atualiza_email (
IN p_novo_nome VARCHAR(100),     -- IN : PARÂMETRO DE ENTRADA
IN p_novo_email VARCHAR(100),    -- IN : PARÂMETRO DE ENTRADA
IN p_id_cliente INT)			 -- IN : PARÂMETRO DE ENTRADA

BEGIN 

UPDATE clientes
SET email = p_novo_email, nome = p_novo_nome
WHERE id = p_id_cliente;

END$$

select * from clientes;
CALL p_atualiza_email ('Gustavo', 'gustavo@email.com', 1);
select * from clientes;

-- ----------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    cidade VARCHAR(50)
);

INSERT INTO usuarios (nome, email, cidade) VALUES
('ana', 'ana@email.com', 'itajai'),
('paulo', 'paulo@email.com', 'videira');

-- PROCEDURE FUNCTION PARA ATUALIZAR DADOS DO USUÁRIOS :

DELIMITER $$ 
CREATE PROCEDURE p_atualiza_usuario (
IN p_id_cliente INT,			 -- IN : PARÂMETRO DE ENTRADA
IN p_novo_nome VARCHAR(100),     -- IN : PARÂMETRO DE ENTRADA
IN p_novo_email VARCHAR(100),    -- IN : PARÂMETRO DE ENTRADA
IN p_nova_cidade VARCHAR(50))	 -- IN : PARÂMETRO DE ENTRADA

BEGIN 

UPDATE usuarios
SET nome = p_novo_nome, 
email = p_novo_email, 
cidade = p_nova_cidade
WHERE id = p_id_cliente;

END$$

SELECT * FROM usuarios;
CALL p_atualiza_usuario (1, 'gustavo', 'gustavo@email.com', 'tangara');

-- ----------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    estoque INT DEFAULT 0,
    preco DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT,
    quantidade INT,
    total DECIMAL(10,2),
    data_venda DATETIME,
    FOREIGN KEY (id_produto) REFERENCES produtos(id)
);

INSERT INTO products (nome, preco, estoque) VALUES
('Teclado RGB', 45.00, 20),
('Mouse RGB', 23.00, 10),
('Monitor Gamer', 120.00, 10);

DELIMITER $$

CREATE PROCEDURE p_registrar_venda (
IN p_id_produto INT,
IN p_quantidade INT)
BEGIN
DECLARE v_estoque INT;
DECLARE v_preco DECIMAL(10,2);
DECLARE v_total DECIMAL(10,2);

-- 1º VERIFICAR SE TEM ESTOQUE SUFICIENTE -> O PRODUTO ATUAL :
SELECT estoque, preco INTO v_estoque, v_preco
FROM products 
WHERE id = p_id_produto;

-- 2º VERIFICAR SE TENHO A QUANTIDADE DO ITEM :
IF v_estoque >= p_quantidade THEN
-- FAZER O CALCULO DO TOTAL (QUANTIDADE * VALOR_UNI) :
SET v_total = p_quantidade * v_preco;

-- 3º DAR BAIXA NO ESTOQUE ANTES DE SUBIR A VENDA NA TABELA VENDAS :
UPDATE products
SET estoque = estoque - p_quantidade
WHERE id = p_id_produto;

-- 4º APÓS DAR BAIXA NO ESTOQUE, REALIZAR VENDA COM ISNERT NA TABELA VENDAS :
INSERT INTO vendas (id_produto, quantidade, total, data_venda)
VALUES (p_id_produto, p_quantidade, v_total, NOW());

-- 5º TRATAMENTO DA VENDA
SELECT "VENDA REALIZADA" as mensagem;
ELSE 
SELECT "QUANTIDADE INSUFICIENTE" as mensagem;

END IF;
END$$

select * from products;

CALL p_registrar_venda(1, 10);


