-- Tabela de Pedidos
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_nome VARCHAR(100) NOT NULL,
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    valor_total DECIMAL(10, 2) DEFAULT 0.00
);

INSERT INTO pedidos (cliente_nome) VALUES ('gustavo');

-- Tabela de Itens do Pedido
CREATE TABLE itens_pedido (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    nome_produto VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id) ON DELETE CASCADE 
);

-- TRIGGER FOR INSERT

DELIMITER $$ 
CREATE TRIGGER trg_after_insert_itens_pedido
AFTER INSERT ON itens_pedido

FOR EACH ROW 
BEGIN 

UPDATE pedidos
SET valor_total = valor_total + (NEW.quantidade * NEW.preco_unitario)
WHERE id = NEW.pedido_id;

END $$ 

INSERT INTO itens_pedido (pedido_id, nome_produto, quantidade, preco_unitario)
VALUES (1, 'teclado', 10, 49.99); 

INSERT INTO itens_pedido (pedido_id, nome_produto, quantidade, preco_unitario)
VALUES (1, 'teclado', 10, 49.99);

-- -----------------------------------------------------------------------------------------------------------------------------------------------------------------------
-- TRIGGER FOR UPDATE

DELIMITER $$ 
CREATE TRIGGER trg_after_update_itens_pedido
AFTER UPDATE ON itens_pedido

FOR EACH ROW 
BEGIN 

IF OLD.quantidade <> NEW.quantidade OR OLD.preco_unitario <> NEW.preco_unitario THEN
UPDATE pedidos
SET valor_total = valor_total - (OLD.quantidade * OLD.preco_unitario) + (NEW.quantidade * NEW.preco_unitario)
WHERE id = NEW.pedido_id;
END IF;
END$$ 

UPDATE itens_pedido
SET quantidade = 10, preco_unitario = 100
WHERE id = 1;

UPDATE itens_pedido
SET quantidade = 10, preco_unitario = 100
WHERE id = 4;

-- ----------------------------------------------------------------------------

-- TRIGGER FOR DELETE

DELIMITER $$
CREATE TRIGGER trg_delete_itens_pedido
AFTER DELETE ON itens_pedido

FOR EACH ROW
BEGIN

UPDATE pedidos
SET valor_total = valor_total - (OLD.quantidade * OLD.preco_unitario)
WHERE id = OLD.pedido_id;

END$$

DELETE FROM itens_pedido WHERE id = 4;
DELETE FROM itens_pedido WHERE id = 1;

-- ------------------------------------------------------------------------------------------------------



























