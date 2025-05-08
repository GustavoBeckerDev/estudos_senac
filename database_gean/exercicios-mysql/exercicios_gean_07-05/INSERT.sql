INSERT INTO atv_colaboradores (nome, d_nascimento, cargo, email, celular) VALUES
('gustavo becker', '1998-05-04', 'dev junior', 'gustavobecker123@email.com', '47995421452'),
('marcela tonello', '1992-01-21', 'designer', 'marcela123@email.com', '49995421545'),
('pedro telesforo', '1995-12-14', 'analista de dados', 'pedro123@email.com', '49994521442');

INSERT INTO atv_projetos (colaborador_id, nome) VALUES
(1, 'samap gateway'),
(2, 'marketplace natural'),
(3, 'sao paulo tickets');

INSERT INTO atv_tarefas (colaborador_id, projeto_id, descricao, prazo_dias) VALUES
(1, 1, 'atualizar os campos de entrada do valor total', 5),
(2, 2, 'inserir fotos atualizadas dos novos produtos', 8),
(3, 3, 'analisar todos os tickets gerados no mes 05', 4);

INSERT INTO atv_entregas (colaborador_id, projeto_id, tarefa_id, data_entrega) VALUES
(1, 1, 1, '2025-05-21'),
(2, 2, 2, '2025-05-26'),
(3, 3, 3, '2025-06-05');
