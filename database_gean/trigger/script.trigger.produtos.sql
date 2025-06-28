CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL
);

-- Tabela para log de auditoria
CREATE TABLE log_auditoria_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT,
    acao VARCHAR(50), -- Por exemplo: 'UPDATE_PRECO', 'UPDATE_ESTOQUE'
    valor_antigo DECIMAL(10, 2),
    valor_novo DECIMAL(10, 2),
    data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario VARCHAR(100)
);

CREATE TABLE clientes (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL
);

CREATE TABLE log_auditoria_clientes (
	id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT, 
    acao VARCHAR(50), 
    dado_antigo VARCHAR(100),
    dado_novo VARCHAR(100),
    data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario VARCHAR(100)
);

INSERT INTO clientes (nome) VALUES
('gustavo'),
('marcela');
    

DELIMITER $$
CREATE TRIGGER tgr_after_update_produto -- CRIAÇÃO DO OBJETO COM A DESCRIÇÃO, QUANDO E ONDE VAI ATUAR
AFTER UPDATE ON produtos
FOR EACH ROW

BEGIN
IF OLD.preco <> NEW.preco THEN
	INSERT INTO log_auditoria_produtos (produto_id, acao, valor_antigo, valor_novo, usuario)
    VALUES (OLD.id, 'UPDATE_PRECO', OLD.preco, NEW.preco, USER());
END IF;

IF OLD.estoque <> NEW.estoque THEN
	INSERT INTO log_auditoria_produtos (produto_id, acao, valor_antigo, valor_novo, usuario)
    VALUES (OLD.id, 'UPDATE_ESTOQUE', OLD.estoque, NEW.estoque, USER());
END IF;
END $$

DELIMITER $$

INSERT INTO produtos (nome, preco, estoque) VALUES
('teclado', 99.99, '50'),
('mouse', 49.99, '20'),
('monitor', 299.99, '10');

UPDATE produtos SET preco = '59.99', estoque = 25 WHERE id = 1;

-- OUTRA TRIGGER PARA SALVAR O LOG DO CLIENTE

DELIMITER $$
CREATE TRIGGER tgr_after_update_clientes -- CRIAÇÃO DO OBJETO COM A DESCRIÇÃO, QUANDO E ONDE VAI ATUAR
AFTER UPDATE ON clientes
FOR EACH ROW

BEGIN
IF OLD.nome <> NEW.nome THEN
	INSERT INTO log_auditoria_clientes (cliente_id, acao, dado_antigo, dado_novo, usuario)
    VALUES (OLD.id, 'UPDATE_NOME', OLD.nome, NEW.nome, USER());
END IF;
END $$
DELIMITER $$

UPDATE clientes SET nome = 'gustavo becker' WHERE id = 1;




    

    















