-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/02/2020 às 11:36
-- Versão do servidor: 5.7.29
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `villadoe_site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `login` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ativado` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nivel` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `acessos`
--

INSERT INTO `acessos` (`id`, `nome`, `login`, `senha`, `ativado`, `nivel`) VALUES
(1, 'Administrativo', 'admin', 'admin', 'S', '50');

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `depoimento` longtext,
  `mostrar` varchar(50) DEFAULT 's'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `data`, `nome`, `depoimento`, `mostrar`) VALUES
(1, '2015-10-24', 'Karen J', 'Chalés simples, mas muito limpinho e com toda estrutura para fazer comida, da para acomodar 6 pessoas no mesmo chalé. Fica localizado no alto da cidade tendo uma vista muito linda. Tem um bom espaço na churrasqueira com toda estrutura e área de lazer bem equipada. Bom lugar para ir com criança. E o custo é muito baixo.', 'S'),
(2, '2015-10-24', 'Fernando A', 'O atendimento é bom, a localização também é ótima, pois fica no centro da cidade, cada chalé de inverno tem fogão, frigobar e cozinha para uma refeição rápida, possui também uma vaga para cada chalé, área para as crianças com vários brinquedos, salão com Sinuca, Pebolim (Totó), além de quadra de futsal. A cidade também é no centro do Circuíto...', 'S'),
(3, '2016-03-24', 'Fabio L', 'Muito bom, acho somente que poderia ter um pouco de música nas áreas comuns que por serem muito grandes acabam por se tornar meio sinistra, mas de resto tudo de bom!', 'S'),
(4, '2016-08-24', 'Maddara C', 'Maravilhoso...tudo de bom em lazer e descanso..muito bom atendimento.... café da manhã excelente.piscinas maravilhosas.muito limpo...paisagem linda...tudo de bom..amei..', 'S'),
(5, '2016-09-24', 'Priscila M', 'Tudo perfeito. Tranquilo. Ótimo em acomodação. Ótimo atendimento!! Logo mais voltarei!', 'S'),
(6, '2016-10-24', 'Wander Allmeida', 'Gostei demais de conhecer Lindóia e aguas de lindóia tambem, achei incrivel a estrutura das cidades, muito bonita e bem arrumada. Melhor ainda foi poder ficar nesse lugar. Foram só dois dias mas foram os melhores que eu podia ter. as meninas de lá sao demais, a Ana luiza, a Adriana, todas muito atenciosas e gentis, certeza que em breve estarei de volta.', 'S'),
(24, '2017-09-11', 'Rosemar', 'Muito bom atendimento,local limpo ,boa localizacao, voltaremos mais vezes', 'N'),
(23, '2017-02-19', 'Simone', 'Lugar lindo, bem estruturado, café dá manhã ótimo, colaboradores atenciosos , tudo muito lindo, bom gosto, limpeza excelente, com certeza voltaremos.  Parabéns !!', 'N'),
(22, '2017-01-05', 'André - Frequencia', 'Teste 17:02', 'N'),
(25, '2017-09-11', 'Delma Pereira Alves', 'Se vc está procurando um recanto onde tem natureza,pessoas educadas e com ar do Paraíso..<br />\r\nE aqui msmo!<br />\r\nE se tem filhos menores, adolescente é nós adultos..Querem atividades??<br />\r\nChamem o Tio Alê..o melhor Recreacionista q já conheci em todos hotéis q já passei...<br />\r\nNão irão se arrepender..<br />\r\nVão e confiram!!!<br />\r\n', 'N');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsec` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
