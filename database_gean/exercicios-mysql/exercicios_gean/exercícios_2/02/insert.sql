insert into departamentos (nome) values
('suporte tecnico'),
('comunicacao e vendas');

insert into setores (id_depart, nome) values
(1, 'ti'),
(1, 'infraestrutura'),
(1, 'suporte ao usuario'),
(2, 'marketing'),
(2, 'publicidade'),
(2, 'atendimento ao cliente');

insert into funcionarios (id_depart, id_setor, nome, idade) values
(1, 1, 'paulo freitas', 26),
(1, 2, 'camila gomes', 22),
(1, 3, 'pamela moraes', 35),
(2, 4, 'maria carla', 41),
(2, 5, 'joana perez', 19),
(2, 6, 'pedro jorge', 27);