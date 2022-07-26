CREATE TABLE PRODUCTO(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	despro varchar(100) null,
	prepro decimal(6,2) null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
)character set latin1 collate latin1_spanish_ci;

alter table PRODUCTO add rutimapro varchar(100) null;

INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Papel Crepe','Ideal para decoraci&oacute;n de trabajos escolares','14.99',1,'crepe.jpg')
,('Papel Bond A4','Papel ultra blanco de 180gr','9.99',1,'bonda4.jpg')
,('Colores Faber Castell','Caja de colores x 12 unid. + 2 de regalo','5.99',1,'colores12unid.jpg')
,('Ecolapices Faber Castell','Caja de ecolapices x 60 unid.','11.99',1,'ecolapices60unid.jpg')
,('Estuche lapices Faber Castell','Estuche de lapiceros de colores x 5 unid.','6.99',1,'lapiceros5unid.jpg')
,('Tempera Artesco 250 ml','Frasco de tempera Artesco de 250 ml','3.99',1,'temperaartesco.jpg')
,('Plastilina Norma','Caja con 12 barras plastilinas. 260 gr','5.99',1,'plastilinanorma.jpg')
,('Cuaderno Standford','Cuaderno cuadriculado Standford 100 hojas','3.49',1,'cuadernostandford.jpg');