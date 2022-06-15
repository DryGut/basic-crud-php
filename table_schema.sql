-- cria a tabela registro

CREATE TABLE registro (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nome TEXT,
  prontuario VARCHAR(10) NOT NULL,
  livro TEXT NOT NULL,
  autor TEXT,
  criado_em DATE
);