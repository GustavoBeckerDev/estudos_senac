insert into cad_configuracao values 
("Estaciona Facil Ltda", "12345678000199", 500, 1000, 100, 500, 150);

insert into cad_tarifacao values 
("S", "Hora"),
("S", "Mensal");

insert into cad_atendente values 
("S", "Carlos da Silva"),
("S", "Ana da Costa"),
("S", "Jose das Neves");

insert into cad_clientes values 
(1, "S", "Leandro Fossatti", "98765432100", NULL),	-- cliente 1 (leandro fossatti)
(1, "S", "Gustavo Becker", "12345678900", NULL),	-- cliente 2 (gustavo becker)
(1, "S", "Ana da Luz", "65498732185", NULL);		-- cliente 3 (ana da luz)

insert into cad_contatos_cliente values 
(1, "P", "49999804023", "4935334023", NULL),  	-- contato 1, leandro
(2, "P", "49998707070", "4935327070", NULL),	-- contato 2, gustavo
(3, "P", "49988141415", NULL, NULL),			-- contato 3, ana
(1, "S", "49999681653", NULL, NULL);			-- contato 4, leandro

insert into cad_tipo_veiculos values 
("S", "Moto"),        -- tipo veículo 1 (moto)
("S", "Carro"),       -- tipo veículo 2 (carro)
("S", "Utilitario");  -- tipo veículo 3 (utilitario)

insert into cad_veiculos values 
(1, 2, "S", "BBZ0B16"), -- cliente 1 (leandro), tipo veículo 2 (carro)
(2, 1, "S", "CDG0B15"), -- cliente 2 (gustavo), tipo veículo 1 (moto)
(3, 1, "S", "AZA4458"), -- cliente 3 (ana), tipo veículo 1 (moto)
(1, 1, "N", "ATA9668"), -- cliente 1 (leandro), tipo veículo 1 (carro)
(3, 3, "S", "MJP0130"); -- cliente 3 (ana), tipo veículo 3 (utilitario) 

insert into cad_servicos values 
("S", "Hora normal"),			-- servico 1 (hora normal)
("S", "Hora desconto"),			-- servico 2 (hora desconto)
("S", "Mensalidade normal"),    -- servico 3 (mensalidade normal)
("S", "Mensalidade desconto");  -- servico 4 (mensalidade desconto)

insert into cad_servicos_x_tipo_veiculo values 
(1, 1, 1, "S", 10, "N"),	-- serviço 1 (hora normal), tipo veículo 1 (moto), tarifacao 1 (hora)
(1, 1, 2, "S", 11, "N"),	-- servico 1 (hora normal), tipo veícilo 1 (moto), tarifacao 2 (mensal)
(1, 2, 1, "S", 12, "N"),	-- servico 1 (hora normal), tipo veículo 2 (carro), tarifacao 1 (hora)
(1, 2, 2, "S", 13, "N"),	-- servico 1 (hora normal), tipo veículo 2 (carro), tarifacao 2 (mensal)
(1, 3, 1, "S", 14, "N"),	-- servico 1 (hora normal), tipo veículo 3 (utilitario), tarifacao 1 (hora)
(1, 3, 2, "S", 15, "N"),	-- servico 1 (hora normal), tipo veículo 3 (utilitario), tarifacao 2 (mensal)
(3, 1, 1, "S", 16, "N"),	-- serviço 3 (mensalidade normal), tipo veículo 1 (moto), tarifacao 1 (hora)
(3, 1, 2, "S", 17, "N"),	-- servico 3 (mensalidade normal), tipo veícilo 1 (moto), tarifacao 2 (mensal)
(3, 2, 1, "S", 18, "N"),	-- servico 3 (mensalidade normal), tipo veículo 2 (carro), tarifacao 1 (hora)
(3, 2, 2, "S", 19, "N"),	-- servico 3 (mensalidade normal), tipo veículo 2 (carro), tarifacao 2 (mensal) 
(3, 3, 1, "S", 20, "N"),	-- servico 3 (mensalidade normal), tipo veículo 3 (utilitario), tarifacao 1 (hora)
(3, 3, 2, "S", 21, "N");	-- servico 3 (mensalidade normal), tipo veículo 3 (utilitario), tarifacao 2 (mensal)

-- INSERT's GUSTAVO

insert into movimentacao values 
(1, 1, 1, 3, 'A', .. , .. , 'Leandro Fossati', '11122233344', 'carro', 'BBZ0B16'),       -- atendente 1 (carlos), cliente 1 (leandro) , veículo 1 (carro placa: BBZ0B16), servico_x_tipoveiculo 3(carro, hora normal, hora), situacao 'A' (ativo), -------, nome(leandro) , cpf/cnpj(11122233344), veículo(carro), placa(BBZ0B16)
(1, 2, 2, 1, 'A', .. , .. , 'Gustavo Becker', '22233314233', 'moto', 'CDG0B15'),	     -- atendente 1 (carlos), cliente 2 (gustavo) , veiculo 2 (moto placa: CDG0B15), servico_x_tipoveiculo 1(moto, hora normal, hora), situacao 'A' (ativo), ---------, nome(gustavo), cpf/cnpj(22233314233), veículo(moto), placa(CDG0B15)
(2, 3, 5, 6, 'A', .. , .. ,		                                                         -- atendente 2 (ana), cliente 3 (ana), veículo 5 (utilitario placa: MJP0130), servico_x_tipoveiculo 6(hora normal, utilitario, mensal), situacao 'A' (ativo),
(2, 3, 3, 8, 'A', 		                                                                 -- atendente 2 (ana), cliente 3 (ana), veículo 3 (moto placa: AZA4458), servico_x_tipoveiculo 8(mensalidade normal, moto, mensal), situacao 'A' (ativo),
(3, 1, 4, 10, 'A',	 	                                                                 -- atendente 3 (jose), cliente 1 (leandro), veículo 4 (carro placa: ATA9668), servico_x_tipoveiculo 10(mensalidade normal, carro, mensal), situacao 'A' (ativo),

-- ainda falta:   data_hora_abertura DATETIME DEFAULT CURRENT_TIMESTAMP
-- ainda falta:   data_hora_fechamento DATETIME
