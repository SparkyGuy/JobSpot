create database clientes;
use clientes;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `clientes` (
  `id` int not null AUTO_INCREMENT primary key,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  `profissao` VARCHAR(30) NULL,
  `nome` varchar(64) INT not NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

insert into clientes values(
14,"Pedro","Pedro","pedrojuan@gmail1.com","1234","mecanico","",
15,"Pedro","Paulo","pedrojuan@gmail2.com","1234","chaveiro","",
16,"Pedro","Marcos","pedrojuan@gmail3.com","1234","baba","",
17,"Pedro","Rodrigues","pedrojuan@gmail4.com","1234","personal","",
18,"Pedro","Manoel","pedrojuan@gmail5.com","1234","jardineiro","",
19,"Pedro","Juan","pedrojuan@gmail6.com","1234","faxineiro","",
20,"Pedro","Jõao","pedrojuan@gmail7.com","1234","entregador","",
21,"Pedro","Carlos","pedrojuan@gmail8.com","1234","pedreiro","",
22,"Pedro","Japex","pedrojuan@gmail9.com","1234","porteiro","",
23,"Pedro","Henrique","pedrojuan@gmail10.com","1234","barbeiro","",
24,"Pedro","Danilo","pedrojuan@gmail11.com","1234","esteticista","",
25,"Pedro","Junior","pedrojuan@gmail11.com","1234","pintor",""
)