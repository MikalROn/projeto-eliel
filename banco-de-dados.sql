CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(45) NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE emprestimo (
  livro_id_livro INTEGER UNSIGNED NOT NULL,
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  funcionario_id_funcionario INTEGER UNSIGNED NOT NULL,
  data_emprestimo DATE NULL,
  data_devolucao DATE NULL,
  PRIMARY KEY(livro_id_livro, usuario_id_usuario),
  INDEX livro_has_usuario_FKIndex1(livro_id_livro),
  INDEX livro_has_usuario_FKIndex2(usuario_id_usuario),
  INDEX emprestimo_FKIndex3(funcionario_id_funcionario)
);

CREATE TABLE funcionario (
  id_funcionario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_funcionario VARCHAR(45) NULL,
  cpf_funcionario VARCHAR(14) NULL,
  email_funcionario VARCHAR(45) NULL,
  fone_funcionario VARCHAR(20) NULL,
  PRIMARY KEY(id_funcionario)
);

CREATE TABLE livro (
  id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(200) NULL,
  autor_livro VARCHAR(45) NULL,
  editora_livro VARCHAR(45) NULL,
  edicao_livro CHAR(3) NULL,
  localidade_livro VARCHAR(25) NULL,
  ano_livro YEAR NULL,
  PRIMARY KEY(id_livro),
  INDEX livro_FKIndex1(categoria_id_categoria)
);

CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(45) NULL,
  cpf_usuario VARCHAR(14) NULL,
  email_usuario VARCHAR(45) NULL,
  data_nasc_usuario DATE NULL,
  fone_usuario VARCHAR(20) NULL,
  PRIMARY KEY(id_usuario)
);


