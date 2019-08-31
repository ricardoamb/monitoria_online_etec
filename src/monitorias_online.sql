DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deletado` tinyint(1) NOT NULL DEFAULT '0',
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `sobrenome` varchar(64) NOT NULL,
  `apelido` varchar(255) DEFAULT NULL,
  `nivel` int(2) NOT NULL DEFAULT '1',
  `monitor` json NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `github_url` varchar(255) NOT NULL,
  `behance_url` varchar(255) NOT NULL,
  `dribbble_url` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `foto_de_perfil` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id` bigint(11) NOT NULL,
  `id_cordenador` bigint(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `monitorias`;
CREATE TABLE IF NOT EXISTS `monitorias` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(11) NOT NULL,
  `id_disciplina` bigint(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL,
  `data_modificacao` timestamp NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;