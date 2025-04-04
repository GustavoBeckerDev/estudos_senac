insert into produtos values (
null, "SSD NVME M4", "Eletrônico", "999.99", "3", "Asus", null, "0.250", true, "SSD DE RÁPIDO CARREGAMENTO DO TIPO NVME 4.0");

select nome, categoria, estoque
from produtos
where estoque between 10 and 50;

select * from produtos;

select * from produtos
where nome like '%Botton%';

delete from produtos where id = 8;

update produtos set situacao = false
where id = 5;














