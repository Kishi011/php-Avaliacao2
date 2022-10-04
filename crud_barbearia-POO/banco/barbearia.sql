CREATE DATABASE IF NOT EXISTS `barbearia`;
USE `barbearia`;

CREATE TABLE Produtos(
    Codigo int(11) NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(20),
    Descricao VARCHAR(50),
    Preco REAL,
    PRIMARY KEY (Codigo)
);

CREATE TABLE Usuarios(
    idUsuario integer NOT NULL AUTO_INCREMENT,
    Email VARCHAR(20),
    Senha VARCHAR(16),
    PRIMARY KEY (idUsuario)
);

INSERT INTO Produtos (Codigo, Nome, Descricao, Preco) VALUES
(1, 'Barbeador Elétrico', 'Máquina de barbear', 104.90),
(2, 'Creme de barbear', 'Creme usado para aparar a barba', 15.50),
(3, 'Navalha', 'Lâmina de barbear', 9.99),
(4, 'Barber Pole', 'Poste de barbearia', 450.00),
(5, 'Tônico para barba', 'Tônico para crescimento e fortalecimento da barba', 75.45);

INSERT INTO Usuarios (Email, Senha) VALUES
('usuario@dominio.com', '123');