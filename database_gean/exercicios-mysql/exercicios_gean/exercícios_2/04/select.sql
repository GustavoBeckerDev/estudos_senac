select * from fornecedores;
select * from produtos;

-- a) Liste o nome do produto com o nome do fornecedor:

select p.nome, f.empresa
from produtos p, fornecedores f 
where p.id_fornecedor = f.id;

-- b) Liste os produtos fornecidos pela empresa TechSul:

select p.nome, p.categoria, f.empresa
from produtos p, fornecedores f 
where p.id_fornecedor = f.id and f.empresa = 'techsul';

-- c) Mostre o nome e a cidade dos fornecedores de mouse optico:

select f.empresa, f.cidade, f.uf
from fornecedores f, produtos p 
where f.id = p.id_fornecedor and p.nome = 'mouse optico';

-- d) Liste todos os produtos com fornecedores que não são de SP:

select p.nome, f.empresa, f.uf
from produtos p, fornecedores f
where f.id = p.id_fornecedor and f.uf <> 'sp';