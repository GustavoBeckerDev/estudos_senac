CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(10,2)
);

INSERT INTO produtos (nome, preco) VALUES
('Teclado', 120.00),
('Mouse', 60.00),
('Monitor', 800.00),
('MousePad', 25.00),
('Memoria RAM', 120.00);

/*CRIAR PROCEDURE PARA LISTAR PRODUTOS ACIMA DE 100 REAIS*/

DELIMITER $$
CREATE PROCEDURE listar_produtos_preco_acima_100(
IN valor_limite DECIMAL(10,2)
)
BEGIN

DECLARE done INT DEFAULT FALSE;

DECLARE v_nome VARCHAR(100);
DECLARE v_preco DECIMAL(10,2);

DECLARE contador INT DEFAULT 0;

DECLARE cur CURSOR FOR
SELECT nome, preco FROM produtos WHERE preco >= valor_limite;

DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

OPEN cur;

leitura: LOOP
FETCH cur INTO v_nome, v_preco;
IF done THEN
leave leitura;
END IF;

SELECT CONCAT('O produto: ' , v_nome, ', tem o preco: R$ ' , v_preco ,'.') as mensagem;

SET contador = contador + 1;
END LOOP;
CLOSE cur;
SELECT CONCAT('O total de produtos lidos é:   ' , contador, '.') as total_final;

END $$

CALL listar_produtos_preco_acima_100(120.00);

