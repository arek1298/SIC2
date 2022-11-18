

CREATE TABLE `correspondencia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(10) NOT NULL,
  `correspondencia` varchar(15) NOT NULL,
  `servicio` varchar(30) NOT NULL,
  `folio` varchar(30) NOT NULL,
  `fechaOficio` varchar(20) NOT NULL,
  `solicita` varchar(40) NOT NULL,
  `dep` varchar(30) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `asigno` varchar(40) NOT NULL,
  `datos` varchar(30) NOT NULL,
  `archivo` varchar(40) NOT NULL,
  `trabajado` varchar(5) NOT NULL,
  `fechaTrabajo` varchar(15) NOT NULL,
  `trabajo` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `folio` (`folio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO correspondencia VALUES("6","04/06/21","Interna","Servicios","558787","54545","Javier Guadalupe","Hospital-Monclova"," Constancia de estudio - jkjkj","kjkj","kjkjk","","si","04/06/21","");
INSERT INTO correspondencia VALUES("7","04/06/21","Interna","Servicios","1234","10-02-2021","Javier Guadalupe Martínez Flores","juridico"," Constancia de estudio ","oscar","No aplica","","si","04/06/21","");





CREATE TABLE `enviar` (
  `clave` varchar(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `cantidadArchivos` int(3) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(40) NOT NULL,
  `cp` varchar(7) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `oficio1` varchar(30) NOT NULL,
  `oficio2` varchar(30) NOT NULL,
  `oficio3` varchar(30) NOT NULL,
  `oficio4` varchar(30) NOT NULL,
  `oficio5` varchar(30) NOT NULL,
  UNIQUE KEY `clave` (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO enviar VALUES("28F9","","0","","","","","","","","","");
INSERT INTO enviar VALUES("9AC8","JESUS ALBERTO CARDENAS BUENTELLO","0","asdasdads","CERRO DEL PUEBLO","25140","SALTILLO COAH.","123213123123","123123123123","123123123123","","");
INSERT INTO enviar VALUES("A6DB","JESUS ALBERTO CARDENAS BUENTELLO","0","DIVISION DEL NORTE","CERRO DEL PUEBLO","25140","SALTILLO COAH.","123123123132","12312312312","","","");
INSERT INTO enviar VALUES("F412","JESUS ALBERTO CARDENAS BUENTELLO","0","DIVISION DEL NORTE","CERRO DEL PUEBLO","25140","SALTILLO COAH.","123213","123123","123123","","");
INSERT INTO enviar VALUES("F456","JESUS ALBERTO CARDENAS BUENTELLO","0","DIVISION DEL NORTE","CERRO DEL PUEBLO","25140","SALTILLO COAH.","1231231321","12312313221","","","");
INSERT INTO enviar VALUES("F46B","JESUS ALBERTO CARDENAS BUENTELLO","0","DIVISION DEL NORTE","CERRO DEL PUEBLO","25140","SALTILLO COAH.","1515151515","1515515151","1241414123","123132123","1231321231");





CREATE TABLE `externa` (
  `Nombre` varchar(300) NOT NULL,
  `Enviodocumentacionoficio` varchar(500) NOT NULL,
  `Persona` varchar(100) NOT NULL,
  `Numerooficio` varchar(250) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Dondeviene` varchar(50) NOT NULL,
  `fechaOficio` varchar(60) NOT NULL,
  `fechaRecibido` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO externa VALUES("Pedro","123","fffff","123","arek@correo.com","ffffff","2021-05-20","2021-05-25");





CREATE TABLE `externa2` (
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `fechaOficio` varchar(250) NOT NULL,
  `dependencia` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `depa` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `solicita` varchar(255) NOT NULL,
  `solicitud` varchar(255) NOT NULL,
  `seTurno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `externaservi` (
  `fecha` varchar(30) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `nombre` varchar(111) NOT NULL,
  `telefono` varchar(111) NOT NULL,
  `correo` varchar(111) NOT NULL,
  `folio` varchar(111) NOT NULL,
  `fechaOficio` varchar(111) NOT NULL,
  `dependencia` varchar(111) NOT NULL,
  `departamento` varchar(111) NOT NULL,
  `tema` varchar(111) NOT NULL,
  `solicita` varchar(111) NOT NULL,
  `solicitud` varchar(111) NOT NULL,
  `seTurno` varchar(111) NOT NULL,
  UNIQUE KEY `folio` (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `interna1` (
  `folio` varchar(300) NOT NULL,
  `departamento` varchar(500) NOT NULL,
  `solicita` varchar(100) NOT NULL,
  `tema` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `solicitud` varchar(100) NOT NULL,
  `seTurno` varchar(255) NOT NULL,
  `fechaOficio` varchar(100) NOT NULL,
  `fechaRecibido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `internaservi` (
  `fecha` varchar(20) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `folio` varchar(300) NOT NULL,
  `fechaOficio` varchar(500) NOT NULL,
  `depa` varchar(100) NOT NULL,
  `tema` varchar(250) NOT NULL,
  `solicita` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `solicitud` varchar(255) NOT NULL,
  `seTurno` varchar(100) NOT NULL,
  UNIQUE KEY `folio` (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO internaservi VALUES("11/05/21","internaservi.sql","7979979","mañana","Hospital-Rosita","Expediente-Copia certificada - ffff","f","f","f","f");
INSERT INTO internaservi VALUES("11/05/21","Medicina del trabajo","f","f","Hospital","Terciarias - f","f","f","f","f");
INSERT INTO internaservi VALUES("11/05/21","Medicina del trabajo","wr","w","Hospital-Sabinas","Expediente-Copia certificada - w","w","w","w","w");





CREATE TABLE `internaservi1` (
  `fecha` varchar(20) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `folio` varchar(300) NOT NULL,
  `fechaOficio` varchar(500) NOT NULL,
  `depa` varchar(100) NOT NULL,
  `tema` varchar(250) NOT NULL,
  `solicita` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `solicitud` varchar(255) NOT NULL,
  `seTurno` varchar(100) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `permisos` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("68","Javier Guadalupe","javi","12345","2");
INSERT INTO members VALUES("69","Arek","admin","admin","1");
INSERT INTO members VALUES("70","jesus","jesus","1234","2");
INSERT INTO members VALUES("71","Ernesto","Luismi","wwe","2");





CREATE TABLE `mensaje` (
  `ID` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `para` varchar(180) DEFAULT NULL,
  `de` varchar(180) DEFAULT NULL,
  `leido` varchar(180) DEFAULT NULL,
  `fecha` varchar(180) DEFAULT NULL,
  `asunto` varchar(180) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;






CREATE TABLE `registro` (
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `permisos` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO registro VALUES("Javier Guadalupe","arekflores123@gmail.com","12345","total");
INSERT INTO registro VALUES("Arek Javir","aaaa","admin","consutlas");





CREATE TABLE `respuesta` (
  `minutario` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(25) NOT NULL,
  `fechaRespuesta` varchar(10) NOT NULL,
  `nombreRespuesta` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `archivoRespuesta` varchar(50) NOT NULL,
  PRIMARY KEY (`minutario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO respuesta VALUES("1","8888","23/05/21","JESUS ALBERTO CARDENAS BUENTELLO","12312312qweqweqew","interna-sentencia.php");
INSERT INTO respuesta VALUES("2","SP/032-2021","23/05/21","JESUS ALBERTO CARDENAS BUENTELLO","Esto es una respuesta","CORRESPONDENCIA.pptx");
INSERT INTO respuesta VALUES("3","8888","04/06/21","JESUS ALBERTO CARDENAS BUENTELLO","","");
INSERT INTO respuesta VALUES("4","558787","04/06/21","","jhjhjhj","");
INSERT INTO respuesta VALUES("5","1234","04/06/21","","hola","");



