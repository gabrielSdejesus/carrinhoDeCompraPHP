CREATE TABLE `PRODUTO` (
  `ID` INT AUTO_INCREMENT PRIMARY KEY,
  `NOME` TEXT NOT NULL,
  `VALOR` DECIMAL(10,2) NOT NULL,
  `DESCRICAO` TEXT,
  `PESO` DECIMAL(10,2) NOT NULL,
  `QUANTIDADE` INT NOT NULL,
  `CODIGO` TEXT NOT NULL,
  `DISPONIBILIDADE` BOOLEAN NOT NULL DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ADMINS` (
	`ID` INT(11) AUTO_INCREMENT PRIMARY KEY,
	`FIRST_NAME` VARCHAR(255) NOT NULL,
	`LAST_NAME` VARCHAR(255) NOT NULL,
	`EMAIL` VARCHAR(255) NOT NULL,
	`USERNAME` VARCHAR(255) NOT NULL,
	`HASHED_PASSWORD` VARCHAR(255) NOT NULL
);

ALTER TABLE ADMINS ADD INDEX INDEX_USERNAME (username);