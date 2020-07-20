CREATE TABLE livros (
  liv_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  liv_nome VARCHAR(100),
  liv_autor VARCHAR(100),
  liv_genero VARCHAR(50),
  liv_editora VARCHAR(50),
  liv_ano INT,
  liv_npaginas INT,
  liv_sinopse VARCHAR(1000)
);

CREATE TABLE usuarios (
  usu_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usu_nome TINYTEXT NOT NULL,
  usu_senha LONGTEXT NOT NULL
);
