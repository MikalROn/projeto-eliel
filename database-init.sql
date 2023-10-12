CREATE TABLE categoria (
    id_categoria INTEGER PRIMARY KEY,
    nome_categoria VARCHAR(45)
);

CREATE TABLE livro (
    id_livro INTEGER PRIMARY KEY,
    categoria_id_categoria INTEGER,
    titulo_livro VARCHAR(100),
    autor_livro VARCHAR(45),
    editora_livro VARCHAR(45),
    edicao_livro CHAR(3),
    ano_livro YEAR,
    localidade_livro VARCHAR(45),
    FOREIGN KEY (categoria_id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE usuario (
    id_usuario INTEGER PRIMARY KEY,
    nome_usuario VARCHAR(100),
    email_usuario VARCHAR(100),
    fone_usuario VARCHAR(20),
    end_usuario VARCHAR(100),
    cpf_usuario VARCHAR(14),
    dt_nasc_usuario DATE
);

CREATE TABLE atendente (
    id_atendente INTEGER PRIMARY KEY,
    nome_atendente VARCHAR(100),
    email_atendente VARCHAR(100),
    fone_atendente VARCHAR(20),
    cpf_atendente VARCHAR(14),
    end_atendente VARCHAR(100)
);

CREATE TABLE emprestimo (
    livro_id_livro INTEGER,
    usuario_id_usuario INTEGER,
    atendente_id_atendente INTEGER,
    data_emprestimo DATE,
    data_devolucao DATE,
    PRIMARY KEY (livro_id_livro, usuario_id_usuario, atendente_id_atendente),
    FOREIGN KEY (livro_id_livro) REFERENCES livro(id_livro),
    FOREIGN KEY (usuario_id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (atendente_id_atendente) REFERENCES atendente(id_atendente)
);