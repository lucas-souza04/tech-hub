CREATE TABLE tb_curso 
( 
 id_curso INT PRIMARY KEY AUTO_INCREMENT,  
 nome_curso VARCHAR(255) NOT NULL,   
 qntd_alunos INT NOT NULL  
)

CREATE TABLE tb_aluno 
( 
 id_aluno INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(255) NOT NULL,  
 notas VARCHAR(255) NOT NULL,
 id_curso INT NOT NULL,  
    FOREIGN KEY (id_curso) REFERENCES tb_curso(id_curso) ON DELETE CASCADE ON UPDATE CASCADE
)

CREATE TABLE tb_cadastro 
( 
 Nome VARCHAR(255) NOT NULL,  
 id_cadastro INT PRIMARY KEY AUTO_INCREMENT,  
 endereco VARCHAR(255) NOT NULL,
 cep VARCHAR(10) NOT NULL,
 data_nasc DATE NOT NULL,
 id_curso INT NOT NULL,
    FOREIGN KEY (id_curso) REFERENCES tb_curso(id_curso) ON DELETE RESTRICT ON UPDATE CASCADE,
 id_aluno INT NOT NULL,  
    FOREIGN KEY (id_aluno) REFERENCES tb_aluno(id_aluno) ON DELETE RESTRICT ON UPDATE CASCADE
)

CREATE TABLE tb_turma 
( 
 id_turma INT PRIMARY KEY AUTO_INCREMENT,  
 nome_turma VARCHAR(255) NOT NULL,  
 periodo VARCHAR(50) NOT NULL,
 id_curso int,
    FOREIGN KEY (id_curso) REFERENCES tb_curso(id_curso) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE tb_professor 
( 
 id_prof INT PRIMARY KEY AUTO_INCREMENT,  
 nome VARCHAR(255) NOT NULL,  
 disciplina VARCHAR(255) NOT NULL,
 cpf VARCHAR(14) NOT NULL,
 id_turma INT NOT NULL,  
    FOREIGN KEY (id_turma) REFERENCES tb_turma(id_turma) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tb_empresa 
( 
 id_empresa INT PRIMARY KEY AUTO_INCREMENT,  
 nome_empresa VARCHAR(255) NOT NULL,  
 cnpj VARCHAR(18) NOT NULL,  
 endereco VARCHAR(255) NOT NULL
);

CREATE TABLE tb_projetos
( 
 id_projeto INT PRIMARY KEY AUTO_INCREMENT,  
 nome_projeto VARCHAR(255) NOT NULL,  
 data_inicio DATE NOT NULL,  
 data_fim DATE NOT NULL,  
 id_prof INT NOT NULL,  
    FOREIGN KEY (id_prof) REFERENCES tb_professor(id_prof) ON DELETE CASCADE ON UPDATE CASCADE
)

DROP TABLE tb_professor;
DROP TABLE tb_turma;
DROP TABLE tb_aluno;
DROP TABLE tb_empresa;
DROP TABLE tb_projetos;
DROP TABLE tb_cadastro; 
DROP TABLE tb_curso;
DROP DATABASE cadastro;