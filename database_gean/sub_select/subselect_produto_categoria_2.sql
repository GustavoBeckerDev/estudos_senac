select * from categoria;
select * from produto;

select nome_produto, preco, (preco * 10) as total_produto from produto;

-- SELECIONE O NOME DA CATEGORIA, O TOTAL DE PRODUTOS EM CADA CATEGORIA E A MÉDIA DE PREÇOS DOS PRODUTOS DE CADA CATEGORIA
select
(select descricao_categoria
from categoria
where categoria.id_categoria = produto.id_categoria) as nome_categoria,
count(*) as total_produtos,
avg(preco) as media_preco
from produto
group by id_categoria;






