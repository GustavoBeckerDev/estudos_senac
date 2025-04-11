insert into atv_clientes (nome, cidade, uf, endereco) values
("jonas", "sao paulo", "sp", "avenida paulista 45"),
("mario", "rio de janeiro", "rj", "rua da luz 550"),
("joao", "belo horizonte", "mg", "rua do centenario 1929"),
("paulo", "itajai", "sc", "rua brusque 998"),
("maria", "videira", "sc", "rua sao paulo 90");

insert into atv_produtos (nome, categoria) values
("mouse", "perifericos"),
("ssd sata", "hardware"),
("teclado", "perifericos"),
("fonte 500w", "hardware"),
("headset", "perifericos");

insert into atv_vendedores(nome) values
("ana paula"),
("maria angela"),
("paulo ramos");

insert into atv_vendas(data_venda,id_cliente, id_produto, id_vendedor) values
('2025-04-01', 1, 1, 1),
('2025-04-01', 1, 3, 1),
('2025-04-01', 2, 5, 2),
('2025-04-01', 3, 2, 3),
('2025-04-01', 5, 1, 1),
('2025-04-02', 4, 3, 2),
('2025-04-02', 1, 3, 3),
('2025-04-02', 4, 5, 1),
('2025-04-02', 3, 2, 3),
('2025-04-02', 5, 4, 2);