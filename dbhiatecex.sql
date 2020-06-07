-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2019 às 00:38
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbhiatecex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `Usuario` varchar(70) COLLATE utf8_bin NOT NULL,
  `Senha` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Usuario`, `Senha`) VALUES
(1, 'Admin', 'tron');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparelho`
--

CREATE TABLE `aparelho` (
  `ID_Aparelho` int(11) NOT NULL,
  `Cliente_Aparelho` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `Modelo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Marca` int(11) DEFAULT NULL,
  `Cor` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `SO` int(11) DEFAULT NULL,
  `Processador` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Placa_video` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aparelho`
--

INSERT INTO `aparelho` (`ID_Aparelho`, `Cliente_Aparelho`, `Tipo`, `Modelo`, `Marca`, `Cor`, `SO`, `Processador`, `Placa_video`, `RAM`) VALUES
(7, 'Nathalia Aparecida Lochi de Almeida', 1, '', 17, 'Preto', 6, 'AMD', 'Galax', 3),
(8, 'Higor Lochi', 2, '', 6, 'Cinza', 5, '', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` bigint(20) NOT NULL,
  `Nome` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Senha` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Telefone` int(40) DEFAULT NULL,
  `Celular` varchar(40) COLLATE utf8_bin NOT NULL,
  `Endereco` varchar(100) COLLATE utf8_bin NOT NULL,
  `CEP` int(20) DEFAULT NULL,
  `Numero` int(10) DEFAULT NULL,
  `Bairro` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Cidade` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CPF`, `Nome`, `Senha`, `Email`, `Telefone`, `Celular`, `Endereco`, `CEP`, `Numero`, `Bairro`, `Cidade`, `Estado`) VALUES
(39832666860, 'Higor Lochi', 'tron1061', 'higoraplochi@gmail.com', 981677803, '981677803', 'Rua Virginia Ortolan', 123321445, 138, 'Jardim Santana', 'HortolÃ¢ndia', 24),
(39832753899, 'Nathalia Aparecida Lochi de Almeida', 'nathalia2503', 'nath.lochi@hotmail.com', 0, '19982183112', 'Rua Virginia Ortolan', 1384452, 0, 'Jardim Santana', 'HortolÃ¢ndia', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `ID_Compra` int(11) NOT NULL,
  `Produto` int(11) DEFAULT NULL,
  `ValorUnit` varchar(20) COLLATE utf8_bin NOT NULL,
  `DataC` date DEFAULT NULL,
  `Quantidade` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`ID_Compra`, `Produto`, `ValorUnit`, `DataC`, `Quantidade`) VALUES
(1, 10, '', '2019-08-27', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `ID_Estado` int(11) NOT NULL,
  `DescEstado` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`ID_Estado`, `DescEstado`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapa'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceara'),
(7, 'Espirito Santo'),
(8, 'Goias'),
(9, 'Maranhao'),
(10, 'Mato Grosso'),
(11, 'Mato Grosso do Sul'),
(12, 'Minas Gerais'),
(13, 'Para'),
(14, 'Paraiba'),
(15, 'Parana'),
(16, 'Pernambuco'),
(17, 'Piaui'),
(18, 'Rio de Janeiro'),
(19, 'Rio Grande do Norte'),
(20, 'Rio Grande do Sul'),
(21, 'Rondonia'),
(22, 'Roraima'),
(23, 'Santa Catarina'),
(24, 'Sao Paulo'),
(25, 'Segipe'),
(26, 'Tocantins'),
(27, 'Distrito Federal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `ID_Marca` int(11) NOT NULL,
  `DescMarca` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`ID_Marca`, `DescMarca`) VALUES
(1, 'NEC'),
(2, 'Fujitsu'),
(3, 'IBM'),
(4, 'Toshiba'),
(5, 'Lenovo'),
(6, 'Dell'),
(7, 'Acer'),
(8, 'HP'),
(9, 'Apple'),
(10, 'Asus'),
(11, 'Compaq'),
(12, 'Sony'),
(13, 'Positivo'),
(14, 'CCE'),
(15, 'Samsung'),
(16, 'Itautec'),
(17, 'Indefinido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `ID_Mensagem` int(11) NOT NULL,
  `Nome` varchar(70) COLLATE utf8_bin NOT NULL,
  `Email` varchar(70) COLLATE utf8_bin NOT NULL,
  `Mensagem` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mes`
--

CREATE TABLE `mes` (
  `ID_Mes` int(11) NOT NULL,
  `DescMes` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `mes`
--

INSERT INTO `mes` (`ID_Mes`, `DescMes`) VALUES
(1, 'Janeiro'),
(2, 'Fevereiro'),
(3, 'Março'),
(4, 'Abril'),
(5, 'Maio'),
(6, 'Junho'),
(7, 'Julho'),
(8, 'Agosto'),
(9, 'Setembro'),
(10, 'Outubro'),
(11, 'Novembro'),
(12, 'Dezembro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `OS` int(11) NOT NULL,
  `DataE` date DEFAULT NULL,
  `DataC` date DEFAULT NULL,
  `DataS` date DEFAULT NULL,
  `Situacao` int(11) DEFAULT NULL,
  `Cliente` bigint(11) DEFAULT NULL,
  `Aparelho` int(11) DEFAULT NULL,
  `Servico` varchar(200) COLLATE utf8_bin NOT NULL,
  `Reclamacao` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Observacoes` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Acessorios` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Pagamento` int(11) DEFAULT NULL,
  `Garantia` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Desconto` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Parcelas` int(10) DEFAULT NULL,
  `ValorF` varchar(30) COLLATE utf8_bin NOT NULL,
  `Responsavel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`OS`, `DataE`, `DataC`, `DataS`, `Situacao`, `Cliente`, `Aparelho`, `Servico`, `Reclamacao`, `Observacoes`, `Acessorios`, `Pagamento`, `Garantia`, `Desconto`, `Parcelas`, `ValorF`, `Responsavel`) VALUES
(23, '2019-10-01', '0000-00-00', '0000-00-00', 4, 39832753899, 7, 'FormatacÃ£o, Analisar aquecimento', 'LentidÃ£o', '', 'Cabo de energia', 3, '', '', 0, '90', 4342354),
(24, '2019-10-01', '2019-10-03', '2019-10-03', 1, 39832666860, 8, 'FormatacÃ£o', 'Muitos arquivos', '', '', 2, '', '', 0, '90', 4342354);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `ID_Pagamento` int(11) NOT NULL,
  `DescPagamento` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`ID_Pagamento`, `DescPagamento`) VALUES
(1, 'Cartao de debito'),
(2, 'Cartao de credito'),
(3, 'Dinheiro'),
(4, 'Indefinido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `ID_Produto` int(11) NOT NULL,
  `DescProduto` varchar(70) COLLATE utf8_bin NOT NULL,
  `ValorUnit` varchar(20) COLLATE utf8_bin NOT NULL,
  `Garantia` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ID_Produto`, `DescProduto`, `ValorUnit`, `Garantia`) VALUES
(10, 'cabo de rede', 'R$20', '1 mes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ram`
--

CREATE TABLE `ram` (
  `ID_Ram` int(11) NOT NULL,
  `DescRam` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `ram`
--

INSERT INTO `ram` (`ID_Ram`, `DescRam`) VALUES
(1, 'DDR-1'),
(2, 'DDR-2'),
(3, 'DDR-3'),
(4, 'DDR-4'),
(5, 'Indefinido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `ID_Situacao` int(11) NOT NULL,
  `DescSituacao` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`ID_Situacao`, `DescSituacao`) VALUES
(1, 'Equipamento entregue reparado'),
(2, 'Equipamento entregue sem a possibilidade de reparo'),
(3, 'Equipamento sendo reparado'),
(4, 'Aguardando a aprovacao do cliente'),
(5, 'Aguardando o retorno do cliente'),
(6, 'Indefinido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `so`
--

CREATE TABLE `so` (
  `ID_SO` int(11) NOT NULL,
  `DescSO` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `so`
--

INSERT INTO `so` (`ID_SO`, `DescSO`) VALUES
(1, 'Windows XP'),
(2, 'Windows Server'),
(3, 'Windows Vista'),
(4, 'Windows 7'),
(5, 'Windows 8'),
(6, 'Windows 10'),
(7, 'Indefinido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `CPFT` int(11) NOT NULL,
  `NomeT` varchar(70) COLLATE utf8_bin NOT NULL,
  `Idade` int(10) NOT NULL,
  `Telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`CPFT`, `NomeT`, `Idade`, `Telefone`, `Email`) VALUES
(42, 'Indefinido', 0, '', ''),
(4342354, 'Rafa', 23, '324234', 'we');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `ID_Tipo` int(11) NOT NULL,
  `DescTipo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`ID_Tipo`, `DescTipo`) VALUES
(1, 'Desktop'),
(2, 'Notebook');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Índices para tabela `aparelho`
--
ALTER TABLE `aparelho`
  ADD PRIMARY KEY (`ID_Aparelho`),
  ADD KEY `Tipo` (`Tipo`),
  ADD KEY `Marca` (`Marca`),
  ADD KEY `SO` (`SO`),
  ADD KEY `RAM` (`RAM`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`),
  ADD KEY `Estado` (`Estado`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_Compra`),
  ADD KEY `Produto` (`Produto`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_Estado`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_Marca`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`ID_Mensagem`);

--
-- Índices para tabela `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`ID_Mes`);

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`OS`),
  ADD KEY `Situacao` (`Situacao`),
  ADD KEY `Aparelho` (`Aparelho`),
  ADD KEY `Pagamento` (`Pagamento`),
  ADD KEY `Responsavel` (`Responsavel`),
  ADD KEY `Cliente` (`Cliente`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`ID_Pagamento`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID_Produto`);

--
-- Índices para tabela `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ID_Ram`);

--
-- Índices para tabela `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`ID_Situacao`);

--
-- Índices para tabela `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`ID_SO`);

--
-- Índices para tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`CPFT`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_Tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aparelho`
--
ALTER TABLE `aparelho`
  MODIFY `ID_Aparelho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_Marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `ID_Mensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mes`
--
ALTER TABLE `mes`
  MODIFY `ID_Mes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `OS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `ID_Pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `ID_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `ram`
--
ALTER TABLE `ram`
  MODIFY `ID_Ram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `situacao`
--
ALTER TABLE `situacao`
  MODIFY `ID_Situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `so`
--
ALTER TABLE `so`
  MODIFY `ID_SO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aparelho`
--
ALTER TABLE `aparelho`
  ADD CONSTRAINT `aparelho_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `tipo` (`ID_Tipo`),
  ADD CONSTRAINT `aparelho_ibfk_2` FOREIGN KEY (`Marca`) REFERENCES `marca` (`ID_Marca`),
  ADD CONSTRAINT `aparelho_ibfk_3` FOREIGN KEY (`SO`) REFERENCES `so` (`ID_SO`),
  ADD CONSTRAINT `aparelho_ibfk_4` FOREIGN KEY (`RAM`) REFERENCES `ram` (`ID_Ram`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `estado` (`ID_Estado`);

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`Produto`) REFERENCES `produto` (`ID_Produto`);

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`Situacao`) REFERENCES `situacao` (`ID_Situacao`),
  ADD CONSTRAINT `orcamento_ibfk_3` FOREIGN KEY (`Aparelho`) REFERENCES `aparelho` (`ID_Aparelho`),
  ADD CONSTRAINT `orcamento_ibfk_4` FOREIGN KEY (`Pagamento`) REFERENCES `pagamento` (`ID_Pagamento`),
  ADD CONSTRAINT `orcamento_ibfk_7` FOREIGN KEY (`Responsavel`) REFERENCES `tecnico` (`CPFT`),
  ADD CONSTRAINT `orcamento_ibfk_8` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
