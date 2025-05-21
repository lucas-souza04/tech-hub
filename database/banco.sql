CREATE TABLE tb_cadastro 
( 
 Nome VARCHAR(255) NOT NULL,  
 id_cadastro INT PRIMARY KEY AUTO_INCREMENT,  
 sobrenome VARCHAR(255),  
 email VARCHAR(255) NOT NULL,  
 senha VARCHAR(50) NOT NULL,  
 cep INT NOT NULL,  
 logradouro VARCHAR(255) NOT NULL,  
 numero INT NOT NULL,  
 complemento VARCHAR(255),  
 bairro VARCHAR(255) NOT NULL,  
 cidade VARCHAR(255) NOT NULL,  
 estado VARCHAR(2) NOT NULL,  
 UNIQUE (email)
); 

CREATE TABLE tb_curso 
( 
 id_curso INT PRIMARY KEY AUTO_INCREMENT,  
 nome_curso VARCHAR(255) NOT NULL,  
 descricao TEXT NOT NULL,  
 carga_horaria INT NOT NULL,  
);

DROP TABLE tb_cadastro; 
DROP TABLE tb_curso;
DROP DATABASE cadastro;