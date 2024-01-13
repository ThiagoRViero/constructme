CREATE DATABASE IF NOT EXISTS constructme;
USE constructme;

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `nome_loja` varchar(30) NOT NULL,
  `nome_logo` varchar(15) NOT NULL,
  `sobre` varchar(600) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whats` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
);


INSERT INTO `config` (`id`, `nome_loja`, `nome_logo`, `sobre`, `endereco`, `email`, `whats`, `telefone`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(1, 'Constructme', 'Constructme', 'O Constructme foi criado para demonstrar soluções práticas para que empresas sem muitos recursos pudessem ter acesso ao mundo digital. Além disso, o Constructme passou por testes com usuários de diversos níveis de familiaridade com as mídias digitais para comprovar sua usabilidade entre pessoas com baixa familiaridade com este meio.', 'Av. Brasil, Nr.:305', 'thiagorochadefarias@gmail.com', '51996686696', '51996686696', 'https://www.facebook.com/thiago.rochadefarias', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/');


CREATE TABLE `solucoes` (
  `id` int(10) NOT NULL,
  `nome_solucao` varchar(35) NOT NULL,
  `filtro` varchar(15) NOT NULL,
  `descricao_solucao` varchar(120) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL,
  `produto` tinyint(1) NOT NULL
);


CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
);

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'cliente', 'cliente');


ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `solucoes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `solucoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

INSERT INTO `solucoes` (`id`, `nome_solucao`, `filtro`, `descricao_solucao`, `valor`, `produto`) VALUES
(1, 'Notebook Gamer Lenovo Gaming 3i', 'Notebooks', 'Intel Core i5-11300H, 8GB RAM, GeForce GTX 1650, SSD 512GB, 15.6 Full HD, Windows 11, Preto - 82MG0009BR', 4199.99, 1),
(2, 'Notebook Gamer Acer Nitro 5', 'Notebooks', 'Intel Core I7-11800H, 16GB RAM, NVIDIA RTX3050, SSD 512GB, 15.6\" LED FHD IPS, Linux, Preto - AN515-57-795J', 4699.99, 1),
(3, 'Notebook Gamer Acer Nitro 5', 'Notebooks', 'AMD Ryzen 5 7535HS, 8GB, NVIDIA RTX 3050, SSD 512GB, 15.6 Full HD, Linux Gutta, Preto - AN515-47-R5SU', 4199.99, 1),
(4, 'Notebook Acer Aspire 3', 'Notebooks', 'AMD Ryzen 3-7320U, 8GB RAM, AMD Radeon, SSD 512GB, 15.6\" LED HD TN 60Hz Windows 11, Cinza - A315-24P-R06B', 2159.99, 1),
(5, 'Notebook Gamer Acer Nitro AMD Ryzen', 'Notebooks', 'AMD Ryzen 7-5800H, 8GB RAM, GeForce GTX 1650, SSD 1TB, 15.6 Full HD, Windows 11, Preto - AN515-45-R4S3', 4249.99, 1),
(6, 'Notebook Samsung Book Intel Celeron', 'Notebooks', 'Intel Celeron Dual-Core, 4GB RAM, SSD 256GB, 15.6 Full HD, Windows 11 Home, Cinza - NP550XDA-KP3BR', 1699.99, 1),
(7, 'Notebook Asus Intel Core i3 1005G1', 'Notebooks', 'Core i3 1005G1, 4GB RAM, 256GB SSD, Tela 15.6, Endless OS, Cinza - X515JA-BR2750', 2399.99, 1),
(8, 'Notebook Acer Aspire 3', 'Notebooks', 'Intel Core i5-1235U, 8GB RAM, SSD 256GB, 15.6 Full HD, Windows 11, Prata - A315-59-51YG', 2649.99, 1),
(9, 'Notebook Lenovo Ideapad 3', 'Notebooks', 'R7-5700u 8GB, 512GB SSD, Full hd 15.6 Polegadas, Integradaamd Radeon™ Graphics, Windows 11, Cinza - 82mf0008br', 2771.78, 1),
(10, 'Notebook Samsung Galaxy', 'Notebooks', 'Intel Core i5-1335U, 8GB RAM, SSD 256GB, 15,6 Full HD, Iris Xe, Windows 11 PRO, Grafite - NP754XFG-KF1BR', 3199.99, 1),
(11, 'Notebook Samsung Book', 'Notebooks', 'Intel Core i7-1165G7, 8GB RAM, 256GB SSD, 15.6 Full HD, Intel Iris Xe, Windows 11 Home, Cinza - NP550XDA-KU1BR', 3699.99, 1),
(12, 'Notebook Asus Vivobook 15 ', 'Notebooks', 'AMD Ryzen 5-4600H, 8GB RAM, SSD 256GB, 15.6 Full HD, AMD Radeon Graphics, Win 11, Prata Metálico - M1502IA-EJ251W', 2899.99, 1),
(13, 'Notebook Acer Predator Triton', 'Notebooks', 'Intel Core i7, RAM 16GB, RTX 3060, SSD 512GB, 16 Polegadas - Windows 11 Home', 6791.55, 1),
(14, 'Notebook Samsung Galaxy Book2', 'Notebooks', 'Intel Core I5-1235u, Windows 11 Home, 16GB, 512GB, SSD, 15.6 Polegadas, FULL HD Led Intel Irirs Xe', 3059.10, 1),
(15, 'Notebook Gamer ASUS TUF', 'Notebooks', 'Intel Core i7-12700H, 8GB RAM, GeForce RTX 3050, SSD 512GB, 15.6 Full HD 144Hz, KeepOS, Cinza - FX507ZC4-HN112', 5599.99, 1),
(16, 'Notebook HP 240 G8', 'Notebooks', 'Intel Core i5-1135G7, 8GB RAM, SSD 256GB, 14 HD, Iris Xe Graphics, Windows 11 PRO - 6E505LA#AK4', 2799.99, 1),
(17, 'Notebook Dell Inspiron 3000', 'Notebooks', 'Intel Core i5 16GB - 512GB SSD 15,6? Full HD Windows11 + Microsoft 365', 3419.10, 1),
(18, 'Notebook Samsung Galaxy Book S', 'Notebooks', 'Intel Core i5-L16G7, 8GB RAM, SSD 256GB, 13.3 Full HD, Windows 11 - NP767XCM-K03BR', 7105.99, 1),
(19, 'Notebook Macbook Air Apple,', 'Notebooks', 'Tela de Retina 13\", M2, 8GB RAM, CPU 8 Núcleos, GPU 8 Núcleos, SSD 256GB, Cinza Espacial - MLXW3BZ/A', 8499.99, 1),
(20, 'Notebook Gamer Asus Rog Strix G16', 'Notebooks', 'Intel Core i9-13980HX, 16GB RAM, GeForce RTX 4060, SSD 512GB, 16\'\' FHD, Win 11, Cinza - G614JV-N3094W', 12899.99, 1),
(21, 'Notebook Dell Inspiron 15', 'Notebooks', 'AMD Ryzen 5-5625U, 8GB RAM, SSD 512GB, 15.6 Full HD Windows 11 - I15-a0505-A20P', 3699.99, 1),
(22, 'Notebook Gamer Lenovo Gaming', 'Notebooks', 'ntel Core i5-11300H, 8GB RAM, GeForce GTX1650, SSD 512GB, 15.6 Full HD, Linux, Preto - 82MGS00200', 4743.99, 1),
(23, 'Tablet Samsung Galaxy Tab A9+', 'Tablets', '64GB, 4GB RAM, Tela Imersiva de 11\" 90Hz, Camera Traseira 8MP, WiFi, Android 14, Grafite - SM-X210NZAAZTO', 1179.00, 1),
(24, 'Tablet Samsung Galaxy S6 Lite 64GB', 'Tablets', 'WiFi, Tela de 10.4, Android 13, Cinza - SM-P613NZAVZTO', 1574.10, 1),
(25, 'Teclado com fio USB Logitech K120', 'Teclados', 'Resistente à Respingos e Layout ABNT2 -920-004423', 59.98, 1),
(26, 'Teclado Maxprint padrão USB 2.0', 'Teclados', 'Universitário preto - 60000140', 17.99, 1),
(27, 'Troca de peças', 'Manutenção', 'Troca de peças do computador ou notebook', 100.00, 0),
(28, 'Limpeza de computadores (desktops)', 'Manutenção', 'Limpeza e troca de pasta térmica', 120.00, 0),
(29, 'Limpeza de computadores (Notebooks)', 'Manutenção', 'Limpeza e troca de pasta térmica', 140.00, 0),
(30, 'Instalação de Softwares', 'Instalações', 'Instalação de softwares não licenciados', 50.00, 0),
(31, 'Formatação (Desktop e Notebooks)', 'Instalações', 'Formatação Windows ou Linux, com backup', 80.00, 0);
