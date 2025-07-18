create table clientes (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
cidade VARCHAR(100));

INSERT INTO clientes (nome, cidade) VALUES
('gustavo', 'itajai'),
('amelia', 'itajai'),
('almir', 'itajai'),
('marcela', 'tangara'),
('camila', 'tangara'),
('pele', 'tangara');

DELIMITER $$
CREATE PROCEDURE listar_clientes(
IN cidade_alvo VARCHAR(100)
)
BEGIN

DECLARE done INT DEFAULT FALSE;

DECLARE v_nome VARCHAR(100);
DECLARE v_cidade VARCHAR(100);

DECLARE contador INT DEFAULT 0;

DECLARE cur CURSOR FOR
SELECT nome, cidade FROM clientes WHERE cidade = trim(lower(cidade_alvo));

DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

OPEN cur;

leitura: LOOP
FETCH cur INTO v_nome, v_cidade;
IF done THEN
leave leitura;
END IF;

SELECT CONCAT('O cliente: ' , v_nome, ', mora na cidade: ' , v_cidade ,'.') as mensagem;

SET contador = contador + 1;
END LOOP;
CLOSE cur;
SELECT CONCAT('O total de clientes lsitados é:   ' , contador, '.') as total_final;

END $$

call listar_clientes('Tangara');
