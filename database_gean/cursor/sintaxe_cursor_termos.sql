-- COMO DECLARAR CURSOR EM UM SELECT: 
DECLARE aula CURSOR FOR SELECT id, nome FROM clientes;

-- DECLARAR AS ENTRADAS (VARIÁVEIS) QUE VEM DO FRONT :
DECLARE v_id INT;
DECLARE v_nome VARCHAR(100);

-- INFORMAR AO CURSOR O INÍCIO E FIM DOS DADOS >>>>> handler :
DECLARE done INT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

-- ABRIR O CURSOR :
OPEN aula

-- LEITURA LINHA A LINHA (FETCH):
loop_cursor: LOOP             -- ABRE O LOOP:
FETCH aula INTO v_id, v_nome; -- PERCORRE LINHA A LINHA PEGANDO O VALOR DAS VARIÁVEIS
IF done 1 THEN               
LEAVE loop_cursor;
END IF;
END LOOP;
