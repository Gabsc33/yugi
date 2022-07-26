CREATE TABLE PRODUCTO{
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	despro varchar(200) null,
	prepro number(6,2) null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
};

alter table PRODUCTO add rutimapro varchar(100) null;

INSERT INTO PRODUCTO(nompro,despro,prepro,estado,rutimapro);
VALUES ('Yu-Gi-Oh! Fantasmas Del Pasado','Cada caja contiene tres sobres, 5 cartas Ghosts From the Past, para un total de 15 tarjetas','430.00','1','ghostfromthepast.jpg')
,('Yu-Gi-Oh! Booster Box Korean','Cartas oficiales de Yugioh','699.99','1','prosmatic.png');


INSERT INTO PRODUCTO(nompro,despro,prepro,estado,rutimapro);
VALUES ('Yu-Gi-Oh! COLECCIÓN LEGENDARIA','Legendary Collection: Gameboard es especial de Legendary Collection','3099.99','1','legendarycollection.png'),
('Yu-Gi-Oh! Barajas Legendarias de Yugi','Decks Legendarios de Yami Yugi Utilizados A Lo largo de las Temporadas','1399.99','1','barajasyugi.png'),
('Yu-Gi-Oh! Barajas de héroes legendarios','mazos legendarios de héroes Este juego de cajas viene con 3 mazos únicos','799.99','1','herosdecks.png'),
('Yu-Gi-Oh! Devastador de duelo','Duel Devastator es un juego de coleccionista de TCG, cartas de colección.','1799.99','1','dueldevastator.png'),
('Yu-Gi-Oh! TCG: ráfaga del destino','Burst of Destiny el último refuerzo central para el Yu-Gi-Oh! con nuevas tarjetas','2299.99','1','burst.png'),
('Yu-Gi-Oh! Baraja de Dios Obelisco','crear un Deck alrededor de una Carta de Dios Egipcio ¡no busques más','279.99','1','obeliscoB.png'),
('Yu-Gi-Oh! Toon Chaos box','la primera serie animada del Reino del Duelista, Caos Toon trae cartas nuevas.','4999.99','1','toonchaos.png'),
('Yu-Gi-Oh! Speed Duel GX','Prepárate para empezar tu juego con la nueva Speed Duel GX: Duel Academy.','649.99','1','SPD.png'),
('Yu-Gi-Oh! Yami Yugi corean','Yu-Gi-Oh Tarjetas Duelist Road pieza de memoria: Yami Yugi Booster Box.','649.99','1','yugiplata.png');


INSERT INTO PRODUCTO(nompro,despro,prepro,estado,rutimapro)
VALUES ('Blue-Eyes Jet Dragon - BACH-EN004 - Starlight Rare','del box Battle of Chaos Llega el dragón de ojos azules en rareza Starlight Para reforzar tu pareja de ojos azules','1999.99','1','jetdragon.jpeg'),
('Ghost Belle  - DIFO-EN100 - Starlight Rare 1st Edition','del Box dimensión Force Llega la bella fantasma y mansión embrujada en rareza Starlight Rare 1st Edition','7999.99','1','ghostbelle.jpeg'),
('Dark Magician Girl - GFP2-EN177 - Ghost Rare 1st Edition','la carta de la colección más cara de fantasmas del pasado segunda edición, llega a la chica más oscura en rareza fantasma','7999.99','1','darkmagiciangirlghost.jpeg'),
('Yata-Garasu - LOD-000 - Secret Rare 1st Edition','DESPUÉS DE ESTAR BANEADA POR 18 AÑOS VUELVE DE ENTRE LAS SOMBRAS EL TEMIBLE Yata-Garasu.','6999.99','1','yata.jpeg'),
('Ultimate Rare - Winged Kuriboh LV10 - CRV-EN005 Unlimited','Cybernetic Revolution fue la expansión número 16 de Yugioh TCG. Fue lanzado en agosto de 2005 y constaba de 85 cartas en total.','19999.99','1','wk.jpeg'),
('Winged Kuriboh LV9 - YG03-EN001 - Ultra Rare year 1999 promo set','Es una tarjeta promocional de Yugioh (sin edición) de Yu-Gi-Oh! Juego de cartas promocionales Yugioh. Esta es Ultra Rara.','249.99','1','wk9.jpeg');


INSERT INTO PRODUCTO(nompro,despro,prepro,estado,rutimapro)
VALUES ('Ultimate Rare - Winged Kuriboh - TLM-EN005 1st Edition','The Lost Millennium fue la decimoquinta expansión de Yugioh TCG. Fue lanzado en junio de 2005 y constaba de 85 cartas en total','7799.99','1','wku.jpeg'),
('Kuriboh - MRD-071 - Super Rare 1st Edition De la segunda expansión','Metal Raiders fue la segunda expansión de Yugioh TCG. Fue lanzado en junio de 2002 y constaba de 144 cartas en total','1999.99','1','kuriboh.jpeg'),
('Kuriboh - PCY-E005 - Secret Rare,Arte alterno promocional','es una carta promocional de Yugioh (sin edición) de Yu-Gi-Oh! Juego de cartas promocionales Yugioh. Este es un Secreto Raro, de Arte Alternativo de kuriboh.','799.99','1','kuriboharte.jpeg'),
('Ultimate Rare - Sky Striker Ace - Kagari - OP08-EN002','Miembro de Caza del Cielo As,','899.99','1','skykagary.jpeg'),
('Forca Celeste - As - Shizuku - OP09-PT003 - Ultimate Rare','Miembro de Caza del Cielo As,','699.99','1','skyshizuku.jpeg'),
('Sky Striker Ace - Roze - IGAS-EN020 - Starlight Rare 1st','Miembro de Caza del Cielo As,','599.99','1','skyace.jpeg'),
('Sky Striker Mobilize - Engage! 1st Edition Secret','Miembro de Caza del Cielo As,','800.00','1','engage.jpeg'),
('Sky Striker Ace - Raye - MP19-EN259 - Prismatic Secret Rare','Miembro de Caza del Cielo As,','1999.99','1','skyraye.jpeg');




CREATE TABLE USUARIO(
	codusu int not null AUTO_INCREMENT,
	nomusu varchar(50),
	apeusu varchar(50),
	emausu varchar(50) not null,
	pasusu varchar(20) not null,
	estado int not null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Usuario','Demo','Correo@example.com','123456',1);




CREATE TABLE pedido(
	codped int not null AUTO_INCREMENT,
	codusu int not null,
	codpro int not null,
	fecped datetime not null,
	estado int not null,
	dirusuped varchar(50) not null,
	telusuped varchar(12) not null,
	PRIMARY KEY (codped)
);









