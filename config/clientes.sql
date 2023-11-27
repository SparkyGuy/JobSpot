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
  `profissao` VARCHAR(30) notNULL,
  `nome-trabalho` varchar(64) INT not NULL,
  `foto-perfil` varchar (500) not null,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;


INSERT INTO clientes (id, nome, sobrenome, email, senha, profissao, `nome-trabalho`, )
VALUES
(1, 'Carlos', 'Silva', 'carlos.silva@example.com', 'senha123xyz', 'Mecânico', 'Oficina do Carlos'),
(2, 'Juliana', 'Martins', 'juliana.martins@example.com', 'senha456abc', 'Chaveiro', 'Chaves Express'),
(3, 'Renato', 'Oliveira', 'renato.oliveira@example.com', 'senha789rty', 'Entregador', 'Entrega Rápida'),
(4, 'Amanda', 'Costa', 'amanda.costa@example.com', 'senhaabcmnh', 'Faxineiro', 'Limpeza Total'),
(5, 'Gabriel', 'Ferreira', 'gabriel.ferreira@example.com', 'senhaoiuyt', 'Babá', 'Cuidados Dedicados'),
(6, 'Fernanda', 'Lima', 'fernanda.lima@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado'),
(7, 'Ricardo', 'Gomes', 'ricardo.gomes@example.com', 'senha123qaz', 'Pedreiro', 'Construção Ágil'),
(8, 'Luana', 'Sousa', 'luana.sousa@example.com', 'senha456abc', 'Jardineiro', 'Jardins da Luana'),
(9, 'Felipe', 'Pereira', 'felipe.pereira@example.com', 'senha789rty', 'Porteiro', 'Segurança Residencial'),
(10, 'Camila', 'Costa', 'camila.costa@example.com', 'senhaabcxyz', 'Barbeiro', 'Estilo Moderno'),
(11, 'Diego', 'Oliveira', 'diego.oliveira@example.com', 'senha123qaz', 'Esteticista', 'Beleza Pura'),
(12, 'Vanessa', 'Martins', 'vanessa.martins@example.com', 'senha456abc', 'Pintor', 'Arte nas Paredes'),
(13, 'Hugo', 'Sousa', 'hugo.sousa@example.com', 'senha789rty', 'Mecânico', 'Auto Hugo'),
(14, 'Aline', 'Ferreira', 'aline.ferreira@example.com', 'senhaoiuyt', 'Chaveiro', 'Chave Mestra'),
(15, 'João', 'Lima', 'joao.lima@example.com', 'senhaqwert', 'Entregador', 'Entregas Expressas'),
(16, 'Mariana', 'Silva', 'mariana.silva@example.com', 'senha123qaz', 'Faxineiro', 'Limpeza VIP'),
(17, 'Lucas', 'Martins', 'lucas.martins@example.com', 'senha456abc', 'Babá', 'Cuidados Especiais'),
(18, 'Patrícia', 'Oliveira', 'patricia.oliveira@example.com', 'senha789rty', 'Personal', 'Treino Intenso'),
(19, 'Eduardo', 'Sousa', 'eduardo.sousa@example.com', 'senhaabcxyz', 'Pedreiro', 'Construção Segura'),
(20, 'Larissa', 'Ferreira', 'larissa.ferreira@example.com', 'senha123qaz', 'Jardineiro', 'Jardins da Larissa'),
(21, 'Leonardo', 'Ferreira', 'leonardo.ferreira@example.com', 'senhaqwert', 'Barbeiro', 'Estilo Único'),
(22, 'Roberto', 'Santos', 'roberto.santos@example.com', 'senha123xyz', 'Esteticista', 'Estética Moderna'),
(23, 'Juliana', 'Lopes', 'juliana.lopes@example.com', 'senha456abc', 'Pintor', 'Arte nas Paredes'),
(24, 'Ricardo', 'Oliveira', 'ricardo.oliveira@example.com', 'senha789rty', 'Mecânico', 'Ricardo Auto Center'),
(25, 'Isabela', 'Silva', 'isabela.silva@example.com', 'senhaabcmnh', 'Chaveiro', 'Chave Mestra'),
(26, 'Rodrigo', 'Martins', 'rodrigo.martins@example.com', 'senhaoiuyt', 'Entregador', 'Expresso Rápido'),
(27, 'Ana', 'Pereira', 'ana.pereira@example.com', 'senhadfrty', 'Faxineiro', 'Limpeza Total'),
(28, 'João', 'Gomes', 'joao.gomes@example.com', 'senhamnbvty', 'Babá', 'Cuidando com Carinho'),
(29, 'Amanda', 'Almeida', 'amanda.almeida@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado'),
(30, 'Luciano', 'Rocha', 'luciano.rocha@example.com', 'senhaeqwrty', 'Pedreiro', 'Construção Luciano'),
(31, 'Tatiane', 'Lima', 'tatiane.lima@example.com', 'senhamnvcxz', 'Jardineiro', 'Jardins da Tatiane'),
(32, 'Fábio', 'Ferreira', 'fabio.ferreira@example.com', 'senha123qaz', 'Porteiro', 'Segurança Residencial'),
(33, 'Vanessa', 'Mendes', 'vanessa.mendes@example.com', 'senha456qwe', 'Barbeiro', 'Cortes da Vanessa'),
(34, 'Eduardo', 'Sousa', 'eduardo.sousa@example.com', 'senha789rty', 'Esteticista', 'Beleza e Bem-Estar'),
(35, 'Patrícia', 'Oliveira', 'patricia.oliveira@example.com', 'senhaabcxyz', 'Pintor', 'Arte nas Cores'),
(36, 'Hugo', 'Costa', 'hugo.costa@example.com', 'senha123abc', 'Mecânico', 'Hugo Mecânica Rápida'),
(37, 'Mariana', 'Silveira', 'mariana.silveira@example.com', 'senha456qaz', 'Chaveiro', 'Chaves Especiais'),
(38, 'Leonardo', 'Martins', 'leonardo.martins@example.com', 'senha789abc', 'Entregador', 'Entrega Ágil'),
(39, 'Carla', 'Lima', 'carla.lima@example.com', 'senhaabcrty', 'Faxineiro', 'Limpeza Profunda'),
(40, 'Gustavo', 'Gomes', 'gustavo.gomes@example.com', 'senharmnhg', 'Babá', 'Cuidados Exclusivos'),
(41, 'Aline', 'Oliveira', 'aline.oliveira@example.com', 'senhaoiuyt', 'Personal', 'Treino Intenso'),
(42, 'Rafael', 'Pereira', 'rafael.pereira@example.com', 'senhadfrty', 'Pedreiro', 'Construções Duradouras'),
(43, 'Isabela', 'Alves', 'isabela.alves@example.com', 'senhaeqwrty', 'Jardineiro', 'Jardins da Isabela'),
(44, 'Roberto', 'Lima', 'roberto.lima@example.com', 'senhamnbvcx', 'Porteiro', 'Segurança Condominial'),
(45, 'Fernanda', 'Ferreira', 'fernanda.ferreira@example.com', 'senhaqwert', 'Barbeiro', 'Estilo Único'),
(46, 'Vinícius', 'Santos', 'vinicius.santos@example.com', 'senha123xyz', 'Esteticista', 'Beleza em Foco'),
(47, 'Juliana', 'Martins', 'juliana.martins@example.com', 'senha456abc', 'Pintor', 'Arte Moderna'),
(48, 'Ricardo', 'Oliveira', 'ricardo.oliveira@example.com', 'senha789rty', 'Mecânico', 'Ricardo Auto Center'),
(49, 'Isabela', 'Silva', 'isabela.silva@example.com', 'senhaabcmnh', 'Chaveiro', 'Chave Mestra'),
(50, 'Rodrigo', 'Martins', 'rodrigo.martins@example.com', 'senhaoiuyt', 'Entregador', 'Expresso Rápido'),
(51, 'Ana', 'Pereira', 'ana.pereira@example.com', 'senhadfrty', 'Faxineiro', 'Limpeza Total'),
(52, 'João', 'Gomes', 'joao.gomes@example.com', 'senhamnbvty', 'Babá', 'Cuidando com Carinho'),
(53, 'Amanda', 'Almeida', 'amanda.almeida@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado'),
(54, 'Luciano', 'Rocha', 'luciano.rocha@example.com', 'senhaeqwrty', 'Pedreiro', 'Construção Luciano'),
(55, 'Tatiane', 'Lima', 'tatiane.lima@example.com', 'senhamnvcxz', 'Jardineiro', 'Jardins da Tatiane'),
(56, 'Fábio', 'Ferreira', 'fabio.ferreira@example.com', 'senha123qaz', 'Porteiro', 'Segurança Residencial'),
(57, 'Vanessa', 'Mendes', 'vanessa.mendes@example.com', 'senha456qwe', 'Barbeiro', 'Cortes da Vanessa'),
(58, 'Eduardo', 'Sousa', 'eduardo.sousa@example.com', 'senha789rty', 'Esteticista', 'Beleza e Bem-Estar');