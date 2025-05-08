insert into cad_configuracao values 
(1, "Estaciona Facil Ltda", "12345678000199", 500, 1000, 100, 500, 150);

insert into cad_tarifacao values
(1, "S", "Hora"),
(2, "S", "Mensal");

insert into cad_atendente values 
(1, "S", "Carlos da Silva"),
(2, "S", "Ana da Costa"),
(3, "S", "Jose das Neves");

insert into cad_clientes values 
(1, 1, "S", "Consumidor", "00000000000", NULL),	    -- cliente 1 (cliente geral)
(2, 1, "S", "Leandro Fossatti", "98765432100", NULL),	-- cliente 2 (leandro fossatti)
(3, 1, "S", "Gustavo Becker", "12345678900", NULL),	-- cliente 3 (gustavo becker)
(4, 1, "S", "Ana da Luz", "65498732185", NULL),		-- cliente 4 (ana da luz)
(5, 1, "S", "Maria Duarte", "54658545244", NULL);	    -- cliente 5 (maria duarte)

insert into cad_contatos_cliente values 
(1, 2, "P", "49999804023", "4935334023", NULL),  	-- contato 1, leandro
(2, 3, "P", "49998707070", "4935327070", NULL),	-- contato 2, gustavo
(3, 4, "P", "49988141415", NULL, NULL),			-- contato 3, ana
(4, 2, "S", "49999681653", NULL, NULL),			-- contato 4, leandro
(5, 5, "P", "49995544521", NULL, NULL);			-- contato 5, maria

insert into cad_tipo_veiculos values 
(1, "S", "Moto"),        -- tipo veículo 1 (moto)
(2, "S", "Carro"),       -- tipo veículo 2 (carro)
(3, "S", "Utilitario");  -- tipo veículo 3 (utilitario)

insert into cad_veiculos values 
(1, 2, 2, "S", "BBZ0B16"), -- cliente 2 (leandro), tipo veículo 2 (carro)
(2, 3, 1, "S", "CDG0B15"), -- cliente 3 (gustavo), tipo veículo 1 (moto)
(3, 4, 1, "S", "AZA4458"), -- cliente 4 (ana), tipo veículo 1 (moto)
(4, 2, 1, "N", "ATA9668"), -- cliente 2 (leandro), tipo veículo 1 (carro)
(5, 4, 3, "S", "MJP0130"), -- cliente 4 (ana), tipo veículo 3 (utilitario) 
(6, 5, 2, "S", "MKO4451"); -- cliente 5 (maria), tipo veículo 2 (carro)

insert into cad_servicos values 
(1, "S", "Hora normal"),			-- servico 1 (hora normal)
(2, "S", "Hora desconto"),			-- servico 2 (hora desconto)
(3, "S", "Mensalidade normal"),    -- servico 3 (mensalidade normal)
(4, "S", "Mensalidade desconto");  -- servico 4 (mensalidade desconto)

insert into cad_servicos_x_tipo_veiculo values 
-- HORA NORMAL (1)
(1, 1, 1, 1, 999, 8, "N"),	-- serviço 1 (hora normal), tipo veículo 1 (moto), tarifacao 1 (hora)
(2, 1, 2, 1, 999, 10, "N"),	-- servico 1 (hora normal), tipo veículo 2 (carro), tarifacao 1 (hora)
(3, 1, 3, 1, 999, 12, "N"),	-- servico 1 (hora normal), tipo veículo 3 (utilitario), tarifacao 1 (hora)
-- MENSALIDADE NORMAL (3)
(4, 3, 1, 2, 999, 119, "N"),	-- servico 3 (mensalidade normal), tipo veícilo 1 (moto), tarifacao 2 (mensal)
(5, 3, 2, 2, 999, 179, "N"),	-- servico 3 (mensalidade normal), tipo veículo 2 (carro), tarifacao 2 (mensal) 
(6, 3, 3, 2, 999, 219, "N"),	-- servico 3 (mensalidade normal), tipo veículo 3 (utilitario), tarifacao 2 (mensal)
-- HORA DESCONTO (2)
(7, 2, 1, 1, 999, 6, "N"),	-- serviço 2 (hora desonto), tipo veículo 1 (moto), tarifacao 1 (hora)
(8, 2, 2, 1, 999, 8, "N"),	-- servico 2 (hora desconto), tipo veículo 2 (carro), tarifacao 1 (hora)
(9, 2, 3, 1, 999, 10, "N"),	-- servico 2 (hora desconto), tipo veículo 3 (utilitario), tarifacao 1 (hora)
-- MENSALIDADE DESCONTO (4)
(10, 1, 1, 2, 999, 99, "N"),	-- servico 4 (mensalidade desconto), tipo veícilo 1 (moto), tarifacao 2 (mensal)
(11, 1, 2, 2, 999, 149, "N"),	-- servico 4 (mensalidade desconto), tipo veículo 2 (carro), tarifacao 2 (mensal)
(12, 1, 3, 2, 999, 199, "N");	-- servico 4 (mensalidade desconto), tipo veículo 3 (utilitario), tarifacao 2 (mensal)

insert into movimentacao values 
(1, 1, 2, 1, 2, 'A', '2025-05-01 08:00:00' , '2025-05-01 16:00:00' , 'Leandro Fossati', '98765432100', 'carro', 'BBZ0B16'), -- atendente 1 (carlos), cliente 1 (leandro) , veículo 1 (carro placa: BBZ0B16), servico_x_tipoveiculo 3(carro, hora normal, hora), situacao 'A' (ativo), hora entrada, hora saida, nome(leandro) , cpf/cnpj(11122233344), veículo(carro), placa(BBZ0B16)                                                   
(2, 1, 3, 2, 1, 'A', '2025-05-01 10:00:00', '2025-05-01 12:00:00' , 'Gustavo Becker', '12345678900', 'moto', 'CDG0B15'),	 -- atendente 1 (carlos), cliente 2 (gustavo) , veiculo 2 (moto placa: CDG0B15), servico_x_tipoveiculo 1(moto, hora normal, hora), situacao 'A' (ativo), hora entrada, hora saida, nome(gustavo), cpf/cnpj(22233314233), veículo(moto), placa(CDG0B15)                                             
(3, 2, 4, 5, 3, 'A', '2025-05-02 12:00:00', '2025-05-02 20:00:00', 'Ana da Luz', '165498732185', 'utilitario', 'MJP0130'),	 -- atendente 2 (ana), cliente 3 (ana), veículo 5 (utilitario placa: MJP0130), servico_x_tipoveiculo 6(hora normal, utilitario, mensal), situacao 'A' (ativo), hora entrada, hora saida, nome(ana), cpfcnpj(165498732185), veículo(utilitario), placa(MJP0130)                               
(4, 2, 4, 3, 4, 'A', '2025-05-02 14:00:00', '2025-05-02 21:00:00', 'Ana da Luz', '165498732185', 'moto', 'AZA4458'),	     -- atendente 2 (ana), cliente 3 (ana), veículo 3 (moto placa: AZA4458), servico_x_tipoveiculo 8(mensalidade normal, moto, mensal), situacao 'A' (ativo),
(5, 3, 2, 4, 5, 'A', '2025-05-03 10:00:00', '2025-05-03 14:00:00', 'Leandro Fossatti', '98765432100', 'carro', 'ATA9668'), -- atendente 3 (jose), cliente 1 (leandro), veículo 4 (carro placa: ATA9668), servico_x_tipoveiculo 10(mensalidade normal, carro, mensal), situacao 'A' (ativo),
(6, 1, 5, 6, 11, 'A', '2025-05-03 16:00:00', '2025-05-03 21:00:00', 'Maria Duarte', '54658545244', 'carro', 'MKO4451'),
(7, 3, 5, 6, 11, 'A', '2025-05-04 10:00:00', '2025-05-04 12:00:00', 'Maria Duarte', '54658545244', 'carro', 'MKO4451'),
(8, 1, 5, 6, 11, 'A', '2025-05-04 16:00:00', '2025-05-04 21:00:00', 'Maria Duarte', '54658545244', 'carro', 'MKO4451'),
(9, 2, 2, 1, 2, 'A', '2025-05-05 10:00:00' , '2025-05-05 13:00:00' , 'Leandro Fossati', '98765432100', 'carro', 'BBZ0B16'),
(10, 3, 3, 2, 1, 'A', '2025-05-05 08:00:00', '2025-05-05 12:00:00' , 'Gustavo Becker', '12345678900', 'moto', 'CDG0B15'),
(11, 2, 4, 5, 3, 'A', '2025-05-06 09:00:00', '2025-05-06 21:00:00', 'Ana da Luz', '165498732185', 'utilitario', 'MJP0130'),
(12, 1, 3, 2, 1, 'A', '2025-05-06 08:00:00', '2025-05-06 22:00:00' , 'Gustavo Becker', '12345678900', 'moto', 'CDG0B15');

insert into cad_tipo_recebimento values 
(1, 'A', 'dinheiro'),
(2, 'A', 'cartao de credito'),
(3, 'A', 'cartao de debito'),
(4, 'A', 'pix');

insert into caixa_operacional values
(1, 1, '2025-05-01 06:00:00', '2025-05-01 23:00:00', 1250.00, 2250.00),
(2, 2, '2025-05-02 06:00:00', '2025-05-02 23:00:00', 2250.00, 3250.00),
(3, 3, '2025-05-03 06:00:00', '2025-05-03 23:00:00', 3250.00, 4250.00),
(4, 2, '2025-05-04 06:00:00', '2025-05-04 23:00:00', 4250.00, 5250.00),
(5, 3, '2025-05-05 06:00:00', '2025-05-05 23:00:00', 5250.00, 6250.00),
(6, 1, '2025-05-06 06:00:00', '2025-05-06 23:00:00', 6250.00, 7250.00);

insert into caixa_movimentacao values
(1, 1, 1, 4, '2025-05-01 16:00:00', 25.00),
(2, 1, 2, 3, '2025-05-01 12:00:00', 10.00),
(3, 2, 3, 1, '2025-05-02 20:00:00', 35.00),
(4, 2, 4, 2, '2025-05-02 21:00:00', 75.00),
(5, 3, 5, 2, '2025-05-03 14:00:00', 22.50),
(6, 3, 6, 1, '2025-05-03 21:00:00', 17.50),
(7, 4, 7, 3, '2025-05-04 12:00:00', 45.00),
(8, 4, 8, 1, '2025-05-04 21:00:00', 19.00),
(9, 5, 9, 1, '2025-05-05 13:00:00', 21.50),
(10, 5, 10, 2, '2025-05-05 12:00:00', 44.00),
(11, 6, 11, 4, '2025-05-06 21:00:00', 5.50),
(12, 6, 12, 3, '2025-05-06 22:00:00', 27.50);
