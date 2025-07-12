CREATE DATABASE cursor1;
USE cursor1;

-- DESATIVAR O MODO SAFE DO BANCO DE DADOS :
SET SQL_SAFE_UPDATES = 0;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    estoque INT DEFAULT 0,
    preco DECIMAL(10,2)
);

INSERT INTO produtos (nome, estoque, preco) VALUES
('Teclado', 10, 120.00),
('Mouse', 15, 60.00),
('Monitor', 5, 800.00);

select * from produtos;

CREATE TABLE IF NOT EXISTS vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_venda DATETIME DEFAULT NOW()
);

CREATE TABLE IF NOT EXISTS venda_itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_venda INT,
    id_produto INT,
    quantidade INT,
    preco_unitario DECIMAL(10,2),
    total DECIMAL(10,2),
    FOREIGN KEY (id_venda) REFERENCES vendas(id),
    FOREIGN KEY (id_produto) REFERENCES produtos(id)
);

CREATE TEMPORARY TABLE IF NOT EXISTS itens_venda_temp (
    id_produto INT,
    quantidade INT
);

INSERT INTO itens_venda_temp (id_produto, quantidade) VALUES
(1, 2),  -- exemplo  >>>>> Teclado
(2, 1);  -- exemplo  >>>>> Mouse

-- PROCEDURE COM UM CURSOR DENTRO :

DELIMITER $$
CREATE PROCEDURE registrar_venda()
BEGIN 
DECLARE done INT default 0;

DECLARE v_id_produto INT;
DECLARE v_qtd INT;
DECLARE v_estoque INT;
DECLARE v_total DECIMAL (10,2);
DECLARE v_id_venda INT;
DECLARE v_preco DECIMAL (10,2);

DECLARE cur CURSOR FOR                                
SELECT id_produto, quantidade FROM itens_venda_temp;

DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

START TRANSACTION;                                     

OPEN cur;
leitura: LOOP
FETCH cur INTO v_id_produto, v_qtd;
IF done = 1 THEN
LEAVE leitura;
END IF;

SELECT estoque INTO v_estoque FROM produtos WHERE id = v_id_produto;

IF v_estoque < v_qtd THEN 
ROLLBACK;

-- MENSAGEM INTERATIVA
SELECT CONCAT('FALHA: PRODUTO ID: ', v_id_produto, ' SEM ESTOQUE!!!') as erro;
CLOSE cur;
LEAVE leitura;
END IF;
END LOOP;
CLOSE cur;

INSERT INTO vendas () VALUES ();
SET v_id_venda = last_insert_id();

-- GRAVAR A BAIXA NO ESTOQUE :
SET done = 0;

OPEN cur;
registro: LOOP
FETCH cur INTO v_id_produto, v_qtd;
IF done = 1 THEN
LEAVE registro;
END IF;

SELECT preco INTO v_preco FROM produtos WHERE id = v_id_produto;
SET v_total = v_preco * v_qtd;
            
INSERT INTO venda_itens (id_venda, id_produto, quantidade, preco_unitario, total) VALUES
(v_id_venda, v_id_produto, v_qtd, v_preco, v_total);
		
UPDATE produtos 
SET estoque = estoque - v_qtd
WHERE id = v_id_produto;
END LOOP;

CLOSE cur;
COMMIT;
SELECT 'VENDA REALIZADA COM SUCESO !!!!!!' as mensagem, v_id_venda as vvenda_id;
end $$

CALL registrar_venda();

SELECT * FROM produtos;
SELECT * FROM vendas;
SELECT * FROM venda_itens;
SELECT * FROM itens_venda_temp;












