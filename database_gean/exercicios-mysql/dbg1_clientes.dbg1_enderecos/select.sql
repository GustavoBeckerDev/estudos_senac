select * from dbg1_clientes;

select * from dbg1_enderecos;

-- ---------------------------------------------------------------------------------------------------------------------------------

-- NO SELECT EU USO OS "APELIDOS" PARA SE REFERIR A TABELA E ESCOLHO A COLUNA 
-- EX c.nome (NOME DA TABELA CLIENTES) 
-- EX e.rua, e.cidade, e.uf (RUA, CIDADE E UF DA TABELA ENDEREÇOS) 
-- NO FROM EU DEFINOS OS APELIDOS 
-- EX c = clientes, e = endereços
-- NO WHERE EU FAÇO A CONEXÃO DA CHAVE ESTRANGEIRA DA TABELA ENDEREÇOS COM A CHAVE PRIMARIA DA TABELA CLIENTES

select c.nome, e.rua, e.cidade, e.uf 
from clientes c, endereco e
where c.id = e.cliente_id
