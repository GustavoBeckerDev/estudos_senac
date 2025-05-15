-- PARTE 04 : ALTERAÇÕES E EXCLUSÕES

-- a) ATUALIZE ALGUM NOME OU DESCRIÇÃO:

UPDATE clinica_clientes
SET nome = 'gustavo becker'
WHERE id = 1;

-- b) ATUALIZE O PREÇO DE UM ITEM:

UPDATE clinica_vendas
SET valor = 59.99
WHERE id = 1;

-- c) DELETE UM REGISTRO COM BASE EM UMA CONDIÇÃO DE DATA:

DELETE
FROM clinica_vendas
where id = 8;