-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2020 às 23:55
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop_doggis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_clientes`
--

CREATE TABLE `cadastro_clientes` (
  `COD_CLIENTE` int(5) NOT NULL,
  `NOME_CLIENTE` varchar(100) NOT NULL,
  `RG_CLIENTE` int(15) NOT NULL,
  `CPF_CLIENTE` int(15) NOT NULL,
  `END_CLIENTE` varchar(255) NOT NULL,
  `EMAIL_CLIENTE` varchar(100) NOT NULL,
  `TOTALPATAZ_CLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`COD_CLIENTE`, `NOME_CLIENTE`, `RG_CLIENTE`, `CPF_CLIENTE`, `END_CLIENTE`, `EMAIL_CLIENTE`, `TOTALPATAZ_CLIENTE`) VALUES
(2, 'Catarina de Paula Santos', 42423423, 42342347, 'Rua Papa Joao XXIII, 22 Pinda-SP', 'catarina@gmail.com', 23234),
(3, 'Junior Soares', 24234367, 75675675, 'Rua Caraguatatuba, 255 - Pinda-SP', 'Juniorsoares@gmail.com', 75674),
(4, 'Joaquim', 232324, 4325343, 'Rua Bela Vista, 23 - Pinda-SP', 'lala@gmail.com', 676),
(6, 'Junior', 242343, 56456, 'lala', 'Juniorchato@gmail.com', 23234),
(8, 'Luiz', 432347675, 23423456, 'rua da Paz, 39 - Pinda-SP', 'dgdrf66@gmail.com', 342),
(11, 'Maria Luiza da Silva Conçeiçao', 5345, 454, 'lalala', 'mskk@gmail.com', 45),
(12, 'Catarina', 3434343, 65657675, 'Papa Joao XXIII', 'mcr-catarina@hotmail.com', 34002);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pets`
--

CREATE TABLE `cadastro_pets` (
  `COD_PET` int(5) NOT NULL,
  `TIPO_PET` set('Cachorro','Gato','Cavalo','Passaro','Outro') NOT NULL,
  `RACA_PET` varchar(60) NOT NULL,
  `PORTE_PET` set('Pequeno','Medio','Grande','') NOT NULL,
  `NOME_PET` varchar(255) NOT NULL,
  `ALERG_PET` varchar(255) NOT NULL,
  `DESC_PET` varchar(255) NOT NULL,
  `CHECK_PET` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_pets`
--

INSERT INTO `cadastro_pets` (`COD_PET`, `TIPO_PET`, `RACA_PET`, `PORTE_PET`, `NOME_PET`, `ALERG_PET`, `DESC_PET`, `CHECK_PET`) VALUES
(1, 'Passaro', 'Agapornis', 'Pequeno', 'Cherry', 'Nao pode tomar banho gelado', 'pequeno, asas verdes, bico vermelho e cabeça preta', 1),
(2, 'Passaro', 'Agapornis', 'Pequeno', 'Avela', 'Nao pode tomar banho gelado', 'pequeno, asas verdes, bico vermelho e cabeça preta', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_produtos`
--

CREATE TABLE `cadastro_produtos` (
  `COD_PRODUTO` int(5) NOT NULL,
  `NOME_PRODUTO` varchar(60) NOT NULL,
  `FAB_PRODUTO` varchar(60) NOT NULL,
  `PRECO_PRODUTO` double NOT NULL,
  `ESP_PRODUTO` varchar(60) NOT NULL,
  `QTD_PRODUTO` int(11) NOT NULL,
  `PATAZ_PRODUTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_produtos`
--

INSERT INTO `cadastro_produtos` (`COD_PRODUTO`, `NOME_PRODUTO`, `FAB_PRODUTO`, `PRECO_PRODUTO`, `ESP_PRODUTO`, `QTD_PRODUTO`, `PATAZ_PRODUTO`) VALUES
(2, 'Creme para cães', 'Auau e cia', 30.9, 'Creme especial para hidratação de cães', 5, 30),
(3, 'Shampoo antipulga', 'Antipuldog', 23.9, 'Shampoo antipuga para cães', 8, 23),
(4, 'Vacina', 'DogHealth', 200, 'Vacina para cães', 100, 150);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_servicos`
--

CREATE TABLE `cadastro_servicos` (
  `COD_SERVICO` int(5) NOT NULL,
  `NOME_SERVICO` varchar(60) NOT NULL,
  `TEMPO_SERVICO` time NOT NULL,
  `RESP_SERVICO` varchar(150) NOT NULL,
  `PRECO_SERVICO` double NOT NULL,
  `PROD_SERVICO` varchar(60) NOT NULL,
  `PATAZ_SERVICO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_servicos`
--

INSERT INTO `cadastro_servicos` (`COD_SERVICO`, `NOME_SERVICO`, `TEMPO_SERVICO`, `RESP_SERVICO`, `PRECO_SERVICO`, `PROD_SERVICO`, `PATAZ_SERVICO`) VALUES
(8, 'teste', '12:00:00', 'teste', 12.9, 'teste', 1223),
(9, 'testealternew', '11:00:00', 'testealternew', 12.9, 'testealternew', 123),
(11, 'Tosa', '00:40:00', 'Atendente', 29.9, 'Tesoura, Xampu e hidratante', 10),
(12, 'Cirurgia Castracao', '01:00:00', 'Veterinario', 4000, 'Esparadrapo, medicação', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` varchar(8) NOT NULL,
  `senhaUsuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `senhaUsuario`) VALUES
('ADMIN01', '21232f297a57a5a743894a0e4a801fc3'),
('ATEND01', 'atend');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  ADD PRIMARY KEY (`COD_CLIENTE`);

--
-- Índices para tabela `cadastro_pets`
--
ALTER TABLE `cadastro_pets`
  ADD PRIMARY KEY (`COD_PET`);

--
-- Índices para tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  ADD PRIMARY KEY (`COD_PRODUTO`);

--
-- Índices para tabela `cadastro_servicos`
--
ALTER TABLE `cadastro_servicos`
  ADD PRIMARY KEY (`COD_SERVICO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  MODIFY `COD_CLIENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `cadastro_pets`
--
ALTER TABLE `cadastro_pets`
  MODIFY `COD_PET` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  MODIFY `COD_PRODUTO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cadastro_servicos`
--
ALTER TABLE `cadastro_servicos`
  MODIFY `COD_SERVICO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
