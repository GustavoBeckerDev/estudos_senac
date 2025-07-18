create database cursor2;
use cursor2;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(10,2)
);

INSERT INTO produtos (nome, preco) VALUES
('Teclado', 120.00),
('Mouse', 60.00),
('Monitor', 800.00),
('MousePad', 25.00);

/* PROCEDURE PARA LISTAR OS PRODUTOS E CONTAR QUANTOS TEM */

DELIMITER $$
CREATE PROCEDURE listar_produtos()
BEGIN 

/*DECLARAÇÃOO DE VARIÁVEIS*/
DECLARE done INT DEFAULT FALSE;

/*DECLARAÇÃO VARIÁVEIS DA TABELA PRODUTOS*/
DECLARE v_nome VARCHAR(100);
DECLARE v_preco DECIMAL(10,2);

/*DECLARAÇÃO DO CONTADOR DE PRODUTOS*/
DECLARE contador INT DEFAULT 0;

DECLARE cur CURSOR FOR
SELECT nome, preco FROM produtos;

/*EXECUTAR O LOOP ATÉ QUE O DONE FALSE (COMEÇA TRUE)*/
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

/*DEPOIS DE DECLARAR TUDO QUE PRECISAMOS, ABRIR O CURSOR*/
OPEN cur;
/*AGORA ABRE O LOOP PARA FAZER A LEITURA LINHA A LINHA*/
leitura: LOOP
FETCH cur INTO v_nome, v_preco;
IF done THEN
leave leitura;
END IF;

/*AGORA APÓS A LEITURA, ENTÃO MOSTRA OS DADOS*/
SELECT CONCAT('O produto: ' , v_nome, ', tem o preco: R$ ' , v_preco ,'.') as mensagem;

/*REGISTRA QUANTOS PRODUTOS JÁ FORAM LIDOS*/
SET contador = contador + 1;
/*FINALIZAR LOOP*/
END LOOP;
/*FECHA O CURSOR*/
CLOSE cur;
/*MOSTRO O TOTAL DE PRODUTOS*/
SELECT CONCAT('O total de produtos lidos é:   ' , contador, '.') as total_final;

END $$

CALL listar_produtos();






























