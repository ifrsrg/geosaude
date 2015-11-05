CREATE DATABASE site_geo;
\c site_geo;
CREATE TABLE usuario (
	id 	 	serial primary key,
	nome 	varchar(20),
	senha	varchar(10)
);
INSERT INTO usuario VALUES (
	default,
	'marcos',
	123456
);