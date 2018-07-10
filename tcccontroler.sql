-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Jul-2018 às 19:11
-- Versão do servidor: 8.0.11
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcccontroler`
--
CREATE DATABASE IF NOT EXISTS `tcccontroler` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcccontroler`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `nome`, `senha`) VALUES
(3, 1518309, 'Bruno Souza Ramos', 107210606),
(4, 1518300, 'Lorena SIlveira', 123123123),
(5, 1111111, 'Thiago Antonio', 123123123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `senha` int(11) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `matricula`, `nome`, `senha`, `area`) VALUES
(1, 1218899, 'Theo M.', 123123123, 'Redes'),
(2, 1224455, 'Fernando S.', 123123123, 'WEB'),
(3, 1311111, 'Euler Marino', 123123123, 'Eng. Software');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

DROP TABLE IF EXISTS `projeto`;
CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nomeprojeto` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `id_professor` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `semestre` varchar(4) NOT NULL,
  `p_pesquisa` varchar(10000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `data_pesquisa` varchar(10) DEFAULT NULL,
  `p_imple` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `data_imple` varchar(10) DEFAULT NULL,
  `feedback` varchar(10000) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nomeprojeto`, `id_professor`, `id_aluno`, `ano`, `semestre`, `p_pesquisa`, `data_pesquisa`, `p_imple`, `data_imple`, `feedback`, `status`) VALUES
(1, 'Sistemas de redes lineares', 1, 4, 2019, '19.1', 'Em matemática, a teoria de sistemas lineares é a base e uma parte fundamental da álgebra linear, um tema que é usado na maior parte da matemática moderna. Deve-se observar que, em primeiro lugar, a equação linear é, necessariamente, uma equação polinomial. em diversos ramos da matemática aplicada e ciências naturais, podemos encontrar vários usos de sistemas lineares. Exemplos são a física, a economia, a engenharia, a biologia, a geografia, a navegação, a aviação, a cartografia, a demografia e a astronomia.[2]', '21/04/2019', 'https://github.com/', '24/04/2019', 'Redes Lineares, o que raios é isso?', 3),
(2, 'Sistemas Web para embarcados', 2, 3, 2019, '19.1', 'Ao plugar a USB do Arduino na Raspberry Pi, será criado um device de comunicação serial, normalmente nomeado como ttyACM0. Com isso, basta realizar processo de leitura/escrita em serial com o baudrate configurado no Arduino também; É preciso ter uma base que seja capaz de realizar comunicação com devices do sistema e que também seja capaz de lidar com requisições Web. É preciso ter um Servidor Web em operação, ou uma aplicação que faça interface com requisições de rede. Em se tratando de servidores Web, temos as opções Apache, Lighttpd e Nginx, dentre os mais difundidos. Para comunicar com o Arduino, existem as seguintes opções: Usar CGI: Você escreve um código no servidor, e o servidor Web faz uma ponte entre a requisição Web e seu código no servidor; Aplicação com interface Web: Você escreve uma aplicação no servidor capaz de responder a requisições Web e gerar respostas específicas. Com relação às linguagens, temos as seguintes opções: Exibição: HTML  - uma linguagem que formata o conteúdo Web, e CSS dá o \"embelezamento\" (fonte, cores, ajuste de texto, etc); Código no Servidor Web com CGI: Você pode escrever aplicações nas seguintes linguagens, que irão interagir com o servidor Web quando houver requisições, gerando também respostas aos clientes Web: PHP; Ruby; Python; C; Shell Script; Outros...', '21/04/2019', 'https://github.com/algumacoisa', '24/04/2019', 'Boa Pesquisa', 1),
(7, 'TCC', 1, 5, 2020, '20.2', 'Desenvolvimento ágil de software (em inglês: Agile software development) ou Método ágil é uma expressão que define um conjunto de metodologias utilizadas no desenvolvimento de software. As metodologias que fazem parte do conceito de desenvolvimento ágil, tal como qualquer metodologia de software, providencia uma estrutura conceitual para reger projetos de engenharia de software.', '20/02/2020', 'https://github.com/UFOP-CSI477/2018-01-atividades-BsRamos', '20/04/2020', 'Com esse nome c vai tirar 10', 1),
(9, 'Meu TCC 2', 1, 4, 2020, '20.1', 'A origem do nome Java não é clara. Uma possibilidade é que a ilha deva o nome à planta jáwa-wut (painço; Setaria italica), que supostamente seria comum na ilha. Antes da \"indianização\", a ilha teve vários nomes diferentes.[2] Outra origem possível é a palavra jaú e as suas variantes, que significam \"para além\" ou \"distante\". Em sânscrito, yava significa cevada, uma planta pela qual Java era famosa.[4] Segundo outros autores, Java deriva do termo iawa do proto-austronésio, que significa \"casa\".[3]', '20/10/2020', 'https://github.com/', '20/12/2020', 'nome merda esse ein', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `matricula` int(7) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `tipo`) VALUES
(1111111, 1),
(1218899, 2),
(1224455, 2),
(1311111, 2),
(1518300, 1),
(1518309, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_aluno` (`id_aluno`) USING BTREE;

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`);

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `projeto_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
