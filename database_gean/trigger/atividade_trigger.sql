CREATE DATABASE atividade_trigger;

-- TABELA PRODUTOS :
CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade_estoque INT NOT NULL DEFAULT 0
);

-- TABELA CLIENTES :
CREATE TABLE clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- TABELA VENDAS :
CREATE TABLE vendas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    id_cliente INT NOT NULL,
    quantidade INT NOT NULL,
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produto) REFERENCES produtos(id),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);

-- TABELA LOG DE CLIENTES :
CREATE TABLE log_clientes (
    id_historico INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    acao VARCHAR(100),
    nome_antigo VARCHAR(100),
    nome_novo VARCHAR(100),
    email_antigo VARCHAR(100),
    email_novo VARCHAR(100),
    data_alteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario VARCHAR(100)
);

-- 1) e 2)TRIGGERS PARA DIMINUIR A QUANTIDADE DO ESTOQUE E TAMBÉM CHECA SE TEM QUANTIDADE O SUFICIENTE

DELIMITER $$

CREATE TRIGGER trg_atualizar_estoque
BEFORE INSERT ON vendas
FOR EACH ROW
BEGIN

DECLARE vquantidade_estoque INT;

SELECT quantidade_estoque INTO vquantidade_estoque
FROM produtos WHERE id = new.id_produto;

IF vquantidade_estoque < NEW.quantidade THEN
	SIGNAL SQLSTATE '45000' 
    SET MESSAGE_TEXT = 'ESTOQUE INSUFICIENTE PARA FAZER ESSA VENDA';
ELSE 
	UPDATE produtos
	SET quantidade_estoque = quantidade_estoque - NEW.quantidade
	WHERE id = NEW.id_produto;
END IF;

END $$

DELIMITER ;

-- INSERT's

INSERT INTO produtos (nome, preco, quantidade_estoque) VALUES
('Maçã Fuji', 5.50, 20),
('Banana Prata', 3.00, 10),
('Alface Crespa', 2.50, 7),
('Tomate Cereja', 8.00, 3);

INSERT INTO clientes (nome, email) VALUES
('Ana Silva', 'ana.silva@email.com'),
('Bruno Costa', 'bruno.costa@email.com');

-- ATIVIDADE 1 e 2 : ATUALIZAR O ESTOQUE AUTOMATICAMENTE :

INSERT INTO vendas (id_produto, id_cliente, quantidade) VALUES
(1, 1, 5); -- PASSOU

SELECT * FROM vendas;
SELECT * FROM produtos;

--  TESTE VENDER PRODUTO COM ESTOQUE INSUFICIENTE :

INSERT INTO vendas(id_produto, id_cliente, quantidade) VALUES
(1, 1, 25); -- NÃO PASSOU (MOSTROU A MENSAGEM DE ERRO)

-- 3) REGISTRAR HISTÓRICO DE ALTERAÇÃO NO CADASTRO CLIENTES :

DELIMITER $$

CREATE TRIGGER trg_log_clientes
BEFORE UPDATE ON clientes
FOR EACH ROW
BEGIN
	IF OLD.nome <> NEW.nome OR OLD.email <> NEW.email THEN
	INSERT INTO log_clientes (id_cliente, acao, nome_antigo, nome_novo, email_antigo, email_novo, usuario)
    VALUES (OLD.id, 'UPDATE', OLD.nome, NEW.nome, OLD.email, NEW.email, USER());
END IF;

END $$
DELIMITER ;

UPDATE clientes 
set nome = 'Gustavo',
email = 'gustavobecker@email.com'
WHERE id = 1; -- PASSOU (FEZ O INSERT NA TABELA LOG_CLIENTES)

-- 4) IMPEDIR CADASTRO DE EMAILS DUPLICADOS :

DELIMITER $$

CREATE TRIGGER trg_impedir_duplicado
BEFORE INSERT ON clientes
FOR EACH ROW
BEGIN

DECLARE id_cadastrado INT,

SELECT id into id_cadastrado
FROM clientes
WHERE email = lower(trim(new.email)))
LIMIT 1;

IF id_cadastrado IS NOT NULL THEN
SIGNAL SQLSTATE '4500'
SET MESSAGE_TEXT 'EMAIL JÁ CADASTRADO'
END IF;

SET NEW.nome = lower(trim(new.nome));






END $$
DELIMITER ;






