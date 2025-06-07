select nome_produto,
(select descricao_categoria from categoria where id_categoria = produto.id_categoria) as nome_categoria
from produto;

select
(select descricao_categoria from categoria where id_categoria  = produto.id_categoria) as nome_categoria,
count(*)
from produto
group by id_categoria;