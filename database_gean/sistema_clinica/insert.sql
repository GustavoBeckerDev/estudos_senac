-- PARTE 02 : INSERÇÃO DE DADOS NAS TABELAS CRIADAS.

insert into clinica_clientes (nome, telefone, email, cidade, uf ) values
('gustavo', 47999554621, 'gustavo123@email.com', 'tangara', 'sc'),
('marcela', 49999554666, 'marcela123@email.com', 'tangara', 'sc'),
('camila', 49988574521, 'camila123@email.com', 'tangara', 'sc'),
('pedro', 49998542144, 'pedro123@email.com', 'videira', 'sc'),
('almir', 47999557784, 'almir123@email.com', 'rio do sul', 'sc');

insert into clinica_funcionarios ( nome, telefone, email ) values
('maria', 49998551245, 'maria123@email.com'),
('jonas', 49988451117, 'jonas123@email.com'),
('glauber', 49999654512, 'glauber123@email.com');

insert into clinica_produtos ( nome, quantidade ) values
('antipulgas', 56),
('anticarrapato', 12),
('antialergico', 99),
('hidratante para patas', 8),
('coleira cachorro M', 10),
('coleira gato M', 41),
('caminha cachorro', 9),
('bebedouro', 5);

insert into clinica_vendas ( cliente_id, funcionario_id, produto_id, valor, quantidade, data_venda ) values
(1, 1, 1, 56.99, 1,'2025-05-04 14:30:00'),
(3, 2, 2, 79.99, 3, '2025-05-17 18:00:00'),
(2, 3, 5, 109.99, 5, '2025-05-18 9:45:00'),
(4, 2, 8, 22.99, 2, '2025-05-21 13:40:00'),
(5, 2, 6, 88.99, 1, '2025-05-22 16:35:00'),
(5, 3, 7, 75.99, 1, '2025-05-23 10:25:00'),
(4, 1, 4, 23.99, 1, '2025-05-24 17:00:00'),
(3, 2, 3, 10.99, 4, '2025-05-25 11:45:00');

insert into clinica_agendamentos ( cliente_id, funcionario_id, servico, valor, data_marcada ) values
(1, 2, 'castracao cachorro', 225.99,'2025-05-17 15:30:00'),
(2, 1, 'castracao gato', 180.99,'2025-05-18 16:00:00'),
(3, 3, 'cirurgia apendice', 1250.99,'2025-05-21 10:30:00'),
(4, 2, 'vacina gripe', 150.99,'2025-05-22 18:00:00'),
(5, 1, 'vacina giardia', 130.99,'2025-05-23 08:00:00');





