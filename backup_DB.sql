-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para allblacks_db
CREATE DATABASE IF NOT EXISTS `allblacks_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `allblacks_db`;

-- Copiando estrutura para tabela allblacks_db.torcedores
CREATE TABLE IF NOT EXISTS `torcedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `ativo` enum('1','') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela allblacks_db.torcedores: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `torcedores` DISABLE KEYS */;
INSERT INTO `torcedores` (`id`, `nome`, `documento`, `email`, `telefone`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `ativo`) VALUES
	(4, 'Silas GonÃ§alves Dos Reis ', '12345678998', 'silastalk@gmail.com', '+5563992785357', '77024088', '806 Sul Ala 10A, Res.Morada Do Sol BL08 AP104', 'Plano Diretor Sul', 'Palmas', 'TO', '1'),
	(5, 'philipe passarim', '98765432112', 'ph@gmail.com', ' +556399998888', '77088099', 'casa da mae', 'taquarussu', 'Palmas', 'TO', '1'),
	(6, 'fulanoqw', '65498712365', 'fulano2@gmail.com', '9999999934', '12345654', 'Av. de fiado', 'centro', 'nova cidade', 'PA', '');
/*!40000 ALTER TABLE `torcedores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
