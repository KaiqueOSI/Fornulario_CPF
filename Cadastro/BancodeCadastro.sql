CREATE DATABASE IF NOT EXISTS `nomedobancodedados` /*cria um banco de dados */;
USE `localsig`;

-- Copiando estrutura para tabela nomedobancodedados.formulario
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `idade` int(11) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `ano` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela localsig.formulario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `formulario` DISABLE KEYS */;
/*!40000 ALTER TABLE `formulario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
