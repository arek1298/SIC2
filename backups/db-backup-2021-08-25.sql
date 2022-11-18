

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
  `archivo` varchar(70) NOT NULL,
  `archivoRespuesta` varchar(100) NOT NULL,
  `trabajado` varchar(5) NOT NULL,
  `fechaTrabajo` varchar(15) NOT NULL,
  `trabajo` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `folio` (`folio`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4;

INSERT INTO correspondencia VALUES("1","28/07/21","Interna","Servicios","308","2021-07-01","PANCHO PEREZ","Hospital-Rosita"," Otros - JHHJJJ","PATSY JANELY ESPINOZA GALINDO","No aplica","DocumentosDeOferta_20210727_132732_883.pdf"," "," "," "," ");
INSERT INTO correspondencia VALUES("2","29/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2300/2021","2021-07-27","ROCIO  RODRIGUEZ  FLORES","juridico"," INPC - LIC.  ASTHER  ADRIANA  MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("3","30/07/21","Externa","Cumplimiento de sentencia","DE/UJ/SC/AF/3029/2021","2021-07-28","OLGA  LORENA   BONIFAT","JURIDICO"," INPC - LIC. ESTHER  ADRIANA  MARTINEZ  AVILA","LIC. MARIA   ELENA   G. VALDEZ TORRES","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("4","30/07/21","Externa","Cumplimiento de sentencia","DE/UJ/SC/AF/3028/2021","2021-07-28"," MARIA   GUILLERMINA OLIVA  MEZA","JURIDICO"," Incremento de pension - LIC. ESTHER  ADRIANA  MAR","ING.IRMA GARCIA REYES","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("5","30/07/21","Externa","Cumplimiento de sentencia","DE/UJ/SC/AF/2303/2021","2021-07-01","SILVIA  CORONADO   LEZA","JURIDICO"," Revision Art.57 - LIC. RAQUEL NOEMI  ALARCON  COR","LIC.MAIRA   BERENICE LUNA  ROCHA","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("6","30/07/21","Externa","Cumplimiento de sentencia","DE/UJ/SC/AF/230/2021","2021-07-01","MARGARITA    CUELLAR  GUERRERO","JURIDICO"," Revision Art.57 - LIC.ESTHER ADRIANA MARTINEZ AVI","LIC.MAIRA  BERENICE   LUNA  ROCHA","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("7","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2384/2021","2021-07-28","MARIA YOLANDA  FLORES  IBARRA","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("8","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2383/2021","2021-07-29","MEIQUIADES  QUIÑONEZ  GARCIA","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("9","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2382/2021","2021-07-28","ZENON BELENDEZ  RIVERA","juridico"," Revision Art.57 - LIC.LETICIA DEL CARMEN  CASTILL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("10","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2314/2021","2021-07-29","ELBA  ESPERANZA  RODRIGUEZ","juridico"," Revision Art.57 - LIC.LETICIA  DEL  CARMEN CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("12","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2313/2021","2021-07-29","GERARDO  ARIEL ARREDONDO  AMADOR","juridico"," Compatibilidad - LIC. LETICIA DEL  CARMEN  CASTIL","STHEPANIE MICHELLE ZUÑIGA GARCIA","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("14","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/2300/2021","2021-07-27","ROCIO RODRIGUEZ  FLORES","juridico"," INPC - LIC.ESTHER ADRIANA  MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("15","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2280/2021","2021-07-27","DANTE  BUSTOS  RODRIGUEZ","juridico"," Revision Art.57 - LIC.ESTHER  ADRIANA MARTINEZ  A","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("16","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2285/2021","2021-07-27","ROSA VIRGINIA VILLASANA MARTINEZ","juridico"," INPC - LIC. RAQUEL NOEMI  ALARCON CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("17","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2286/2021","2021-07-27","THELMA  GARZA  PINALES","juridico","  - LIC.ESTHER ADRIANA MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("18","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2288/2021","2021-07-01","YOLANDA  SAUCEDO FARIAS","juridico"," INPC - LIC.ESTHER ADRIANA MARTINEZ AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("19","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2276/2021","2021-07-27","DOMINGO FRANCO SANTILLAN","juridico"," INPC - LIC.ESTHER ADRIANA MARTINEZ AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("20","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2277/2021","2021-07-27","OLGA LORENA  ROJAS BONIFAT","juridico"," INPC - LIC. RAQUEL NOEMI ALARCON  CORTEZ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("21","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2278/2021","2021-07-27","MA.BEATRIZ RODRIGUEZ GARCIA","juridico"," INPC - LIC. ESTHER ADRIANA MARTINEZ AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("23","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SE/AF/2281/2021","2021-07-27","MARIA TERESA LIMAS MUÑOZ","juridico"," INPC - LIC.RAQUEL NOEMI ALARCON CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("24","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2282/2021","2021-07-27","GUILLERMO GARCIA LEGASPI","juridico","  - LIC. ESTHER ARIANA MARINEZ AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("25","30/07/21","Interna","Cumplimiento de sentencia","DE/UH/SC/AF/2277/2021","2021-07-27","LIC. RAQUEL NOEMÍ ALARCÓN CORTÉS","juridico"," Otros - NULIDAD","MAYRA LUNA ROCHA","No aplica",""," ","si","30/07/21","OSCAR ALEJANDRO MARTINEZ CERDA");
INSERT INTO correspondencia VALUES("26","30/07/21","Interna","Seguridad e Higiene","DRH/223/2021","2021-07-22","DR. JONATHAN ZETINA GARCIA, DIRECTOR","Hospital-Sabinas"," Riesgo de trabajo - ACCIDENTE SAN JUANA MALDONADO","OSCAR ALEJANDRO MARTINEZ CERDA","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("27","30/07/21","Interna","Servicios","DE/UJ/SC/AF/2283/2021","2021-07-01","MARIA GUADALUPE LEAL REYES","juridico"," INPC - LIC.RAQUEL NOEMI ALARCON  CORTEZ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("28","30/07/21","Interna","Servicios","DE/UJ/SC/AF/2284/2021","2021-07-27","MARIA CONCEPCION ORTIZ LAZARIN","juridico"," INPC - LIC.ESHTER  ADRIANA MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("29","30/07/21","Interna","Servicios","DE/UJ/SC/AF/2229/2021","2021-07-27","J. REFUGIO  SALAZAR CALZADA","juridico"," INPC - LIC.ESTHER ADRIANA MARTINEZ ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("30","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2291/2021","2021-07-27","SANJUANA  AGUILERA  CARRILLO","juridico"," INPC - LIC.RAQUEL NOEMI ALARCON CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("31","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2292","2021-07-27","ELVIRA URGUIZO PEREZ","juridico"," INPC - LIC.ESHTER ADRIANA MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("33","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2294/2021","2021-07-27","J.SANTOS NAVARRO  LARA","juridico"," INPC - LIC.ESTHER  ADRIANA MARTINEZ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("34","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2295/2021","2021-07-27","ELIZABETH  ESPINOZA  NICANOR","juridico"," INPC - LIC.RAQUEL NOEMI ALARCON  CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("35","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2296/2021","2021-07-27","LORENZO  MARTINEZ  LOPEZ","juridico"," INPC - LIC.ESTHER ADRIANA ARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("36","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/22972021","2021-07-27","MARIA  ALICIA  RIVERA PEREZ","juridico"," INPC - LIC.RAQUEL NOEMI ALARCON  CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("37","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2298/2021","2021-07-27","SILVIA  GUADALUPE MARTINEZ HERNANDEZ","juridico"," INPC - LIC. ESTHER ADRIANA MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("38","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2299/2021","2021-07-27","ARTURO  CHRISTIAN CUELLAR  LOPEZ","juridico"," INPC - LIC.RAQUEL  NOEMI ALARCON   CORTES","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("39","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF2307/2021","2021-07-27","DORA   ELIA  FACUNDO","juridico"," INPC ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("40","30/07/21","Interna","Cumplimiento de sentencia","600.602.1/SC/LVR/20905/2021","2021-07-28","MA.DEL  CARMEN   SANTOY    GONZALES","juridico"," INPC - LIC. ALEJANDRA  ANASTACIO  GONZALEZ","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("41","30/07/21","Interna","Cumplimiento de sentencia","6000.602/SC/ASR/16280/2021","2021-07-28","DIANA MARIBEL RODRIGUEZ CAMPOS","juridico"," Compatibilidad - LIC.GABRIELA  SANTIAGO  DE  JESU","STHEPANIE MICHELLE ZUÑIGA GARCIA","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("42","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2301/2021","2021-07-01","MARIA ELENA SANCHEZ  PEREZ","juridico"," Otros - INCREMENTO  DE  PENSION ","","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("43","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2031/2021","2021-07-27","MARIA  ELENA  SANCHEZ  PEREZ","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("44","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2302/2021","2021-07-01","PEDRO  MEDINA  GALLEGOS","juridico"," Otros - INCREMENTO  DE  PENCION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("45","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2305/2021","2021-07-27","MARIA ELENA SANCHEZ  PEREZ","juridico"," Otros - INCREMENTO  DE PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("47","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2289/2021","2021-07-27","JOAQUIN  ORTIZ  CASTILLO","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("48","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF2287/2021","2021-07-27","CARLOTA   CARRERA  VELAZQUEZ","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("49","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2274/2021","2021-07-27","CONCEPCION  MEDINA  VALDEZ","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("50","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2275/2021","2021-07-27","REYES  GALVIZ  NUÑEZ","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("51","30/07/21","Interna","Cumplimiento de sentencia","DE/UJ/SC/AF/2293/2021","2021-07-27","ARTURO  MARCHADO  FLORES","juridico"," Otros - INCREMENTO  DE  PENSION","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("52","02/08/21","Interna","Servicios","SPE/UAPE/111/2021","2021-07-30","DIAZ  AGUIRRE  MIGUEL  ANGEL    Y  DIAZ ","Hospital-Monclova"," Gasto funeral - JUANA  DEL   RIO  NUÑEZ","RITA LETICIA CEJA MARTINEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("53","02/08/21","Interna","Servicios","REMESA   46","2021-07-29","REYES   MARTINEZ   RUBEN  Y   RODRIGUEZ ","Hospital-Torreon"," Gasto funeral - REMESA  46  Y  RITA  Y  HAEL   FI","RITA LETICIA CEJA MARTINEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("54","02/08/21","Interna","Servicios","SP/DPSH/UPET/150/2021","2021-07-30","LECHUGA  GUTIERREZ  MARIA  FELICITAS  Y ","Hospital-Torreon"," Otros - DESIGNACION  DE  BENEFICIARIOS    LIC.EDG","RITA LETICIA CEJA MARTINEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("55","02/08/21","Interna","Servicios","SP/DPSH/UAPET/154/2021","2021-07-30","CASAR  BELMARES  VICTOR  Y  CASTAÑEDO  G","Hospital-Torreon"," Otros - DESIG. DE  BENEF.  LIC.EDGAR ARMANDO CEPE","JESUS LOREDO GONZALEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("56","02/08/21","Interna","Servicios","DE/UJ/SC/AF/2021","2021-08-02","AIDA   ARACELI  MORENO  VILLARREAL","juridico"," Otros - LIC.RAQUEL NOEMI ALARCON  CORTES","RITA LETICIA CEJA MARTINEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("59","02/08/21","Interna","Servicios","DE/UJ/2343/2021","2021-08-03","CARLOS  MARTINEZ  RAMOZ","juridico"," Revision Art.57 - LIC.LETICIA   DEL  CARMEN  CAST","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("60","02/08/21","Interna","Servicios","DE/UJ/2342/2021","2021-08-03","DORA  ELIA  PUENTE MARTINEZ","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("61","02/08/21","Interna","Servicios","DE/UJ/2341/2021","2021-08-03","JOSE  GERARDO  RAMIREZ ESCAREÑO","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN CASTILL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("62","02/08/21","Interna","Servicios","DE/UJ/2340/2021","2021-08-03","JESUS  MACIAS  CARMONA","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("63","03/08/21","Interna","Servicios","DE/UJ/2339/2021","2021-07-29","ROGELIO  LOPEZ  JIMENEZ","juridico"," Revision Art.57 - LIC.LETICIA DEL CARMEN CASTILLO","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("64","03/08/21","Interna","Servicios","DE/UJ/2338/2021","2021-08-03","MANUEL SANCHEZ  MEDELLIN","juridico"," Revision Art.57 ","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("65","03/08/21","Interna","Servicios","DE/UJ/2337/2021","2021-08-03","MAURILIO   JAVIER  UDAVE LEZA","juridico"," Revision Art.57 - LIC.LETICIA DEL CARMEN CASTILLO","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("66","03/08/21","Interna","Servicios","DE/UJ2336/2021","2021-08-03","VICTOR  MANUEL  CASTILLO   RODRIGUEZ","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("67","03/08/21","Interna","Servicios","DE/UJ/2335/2021","2021-08-03","MARIA  DEL  ROSARIO  SORIA  CHACON","juridico"," Revision Art.57 - LIC.LETICIA DEL  CARMEN  CASTIL","JULIA ISELA SANCHEZ HERNANDEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("68","03/08/21","Interna","Servicios","S/N/2021","2021-08-03","EGAN  PONCE  GLORIA  LIDIA","hospital-pideras"," Subsidio - JAVIER  MOISEIS  DURAN  MONTES","OSCAR ALEJANDRO MARTINEZ CERDA","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("69","03/08/21","Interna","Servicios","MT/153/2021","2021-08-03","MARTINEZ  GONZALEZ  IRMA  ISELA","hospital"," Expediente-Copia certificada - DRA. HILDA  LUNA  ","ROBERTO GARZON","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("71","03/08/21","Interna","Servicios","1020/2021","2021-08-03","GARCIA  PUENTE  ENRIQUE  Y  VAZQUEZ  SAU","hospital-pideras"," Gasto funeral - LIC.MARISELA  VALENZUELA  HERNADE","RITA LETICIA CEJA MARTINEZ","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("73","03/08/21","Interna","Servicios","N/N/2021","2021-08-03","RODOLFO  RODRIGUEZ  MONTES","hospital-pideras","  - PETICION,  ","","MIGUEL   PEÑA ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("78","03/08/21","Interna","Servicios","9-1-2-23936/21","2021-08-03","FABIAN  ATAYDE  ESCAJEDA","juridico"," Otros - CUMPLIMINTO  DE  CENTENCIA","IRMA GUADALUPE GARCÍA REYES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("82","03/08/21","Interna","Servicios","DE/UJ/SC/AF/2689/2021","2021-07-15","JUANITA  CONCEPCION  PEREZ","juridico"," INPC - JUAN JOSE CASTRO RIVERA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("84","04/08/21","Interna","Servicios","DE/SC/AF/2835/2021","2021-07-15","MARIA  GUADALUPE  LOPEZ","juridico"," INPC - LIC.ESTHER  ADRIANA MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("85","04/08/21","Interna","Servicios","S/N/2021/","2021-07-15","GABRIELA  MOTA  HERRERA","juridico"," INPC - JORGE  LERMA  SANTILLAN","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("86","04/08/21","Interna","Servicios","S/N2021","2021-07-15","FRANCISCA VALDIVESO  RASGADO","juridico"," INPC - JORGE  LERMA  SANTILLAN","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("87","04/08/21","Interna","Servicios","DE/UJ/SC/AF/2872/2021","2021-07-15","JUAN  ANTONIO  ENCINA TOVAR","juridico"," INPC - LIC.HESTER  ADRIANA  MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("88","04/08/21","Interna","Servicios","DE/UJ/SC/AF/2692/2021","2021-07-15","JOSE  VAQUERA MONTIEL","juridico"," INPC - LIC.ESTHER  ADRIANA  MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("90","04/08/21","Interna","Servicios","9-1-2-23836/21","2021-07-15","MANUEL LOPEZ   GOMEZ","juridico"," INPC - MAG. ADALBERTO G. SALGADO  BORREGO","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("91","04/08/21","Interna","Servicios","9-1-2-23/23784/21","2021-07-15","EFRAIN  CASTRO  VARELA","juridico","  - MAG. ADALBERTO  G. SALGADO  BORREGO","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("94","04/08/21","Interna","Servicios","DE/UJ//SC/AF/3003/2021","2021-07-15","MARIA  DEL  CAREN  SANDOVAL SANCHEZ","juridico"," INPC - LIC.ESTHER  ADRIANA  MARTINEZ  AVILA","MARIA ELENA GUADALUPE VALDEZ TORRES","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("95","04/08/21","Interna","Servicios","MT/157/","2021-08-04","MARTINEZ  ALFARO  JOSE MARIO","hospital"," Expediente-Copia certificada - DRA. HILDA  LUNA  ","ROBERTO GARZON","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("96","04/08/21","Interna","Servicios","MT/156/21","2021-08-04","GUZMAN  NARVAEZ  VICTORIANO","hospital"," Estudios - DRA. HILDA  LUNA  CASTILLO","ROBERTO GARZON","No aplica",""," "," "," "," ");
INSERT INTO correspondencia VALUES("97","04/08/21","Interna","Servicios","MT/159/2021","2021-08-04","MARTINEZ CONTRERAS  LUIS  FERNANDO","hospital"," RT09-Original - DRA. HILDA  LUNA CASTILLO ","ROBERTO GARZON","No aplica",""," ","si","03/08/21","JESUS ALBERTO CARDENAS BUENTELLO");
INSERT INTO correspondencia VALUES("98","04/08/21","Externa","servicios","CMT/0681","2021-08-04","CABALLERO  SANCHERZ  SERGIO","MEXICO"," Expediente-Copia certificada - DRA. ROSSANA  MART","ROBERTO GARZON","No aplica  ",""," ","si","03/08/21","JESUS ALBERTO CARDENAS BUENTELLO");
INSERT INTO correspondencia VALUES("99","04/08/21","Externa","servicios","SP/DPSHT/1654/2021","2021-08-04","HECTOR DAVID  ALEMAN   DE  LA  PEÑA","DURANGO  DGO,"," Expediente-Copia certificada - PROFR. HILARIO  GO","ROBERTO GARZON","No aplica  ",""," ","si","03/08/21","JESUS ALBERTO CARDENAS BUENTELLO");
INSERT INTO correspondencia VALUES("100","04/08/21","Interna","Servicios","123123","2021-08-06","JESUS LOREDO GONZALEZ -ADMINISTRATIVO","sociales y culturales"," Gasto funeral ","JESUS ALBERTO CARDENAS BUENTELLO","No aplica",""," ","si","04/08/21","JESUS ALBERTO CARDENAS BUENTELLO");
INSERT INTO correspondencia VALUES("101","04/08/21","Interna","Servicios","DE/UJ/SC/AF/2569/2021","2021-08-04","MARIA  SUSANA  ORTEGA LOZANO  Y  LUIS  P","juridico"," Subsidio - LIC.DIEGO ARMANDO  LUNA GARCIA","OSCAR ALEJANDRO MARTINEZ CERDA","No aplica",""," ","si","04/08/21","OSCAR ALEJANDRO MARTINEZ CERDA");
INSERT INTO correspondencia VALUES("102","03/08/21","Interna","Servicios","777887","2021-08-06","JESUS CARDENAS-DESARROLLADOR DEL SISTEMA","Hospital-Parras"," Pension Alimenticia ","JESUS ALBERTO CARDENAS BUENTELLO","No aplica",""," ","si","03/08/21","JESUS ALBERTO CARDENAS BUENTELLO");
INSERT INTO correspondencia VALUES("103","03/08/21","Externa","Seguridad e Higiene","1234ggggg","1212-12-12","asdads-adasd","REINOSA"," Comision de seguridad e higiene ","JUANA MARIA SANCHEZ ROBLEDO","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("104","03/08/21","Interna","Servicios","777776666676","2021-08-29","JESUS CARDENAS BUENTELLO-DESARROLLADOR D","hospital-acuña"," Certificado de poliza ","STHEPANIE MICHELLE ZUÑIGA GARCIA","No aplica",""," ","si","03/08/21","SARA MARIA CISNEROS CASTRO");
INSERT INTO correspondencia VALUES("105","03/08/21","Externa1","servicios1","adasdsdddddffffvgvdas","2021-08-141","JESUS CARDENAS-DESARROLLADOR DEL SISTEMA","QUERETARO1"," Certificado de poliza 1","OSCAR ALEJANDRO MARTINEZ CERDA1","No aplica  ",""," "," "," "," ");
INSERT INTO correspondencia VALUES("106","24/08/21","Interna","Seguridad e Higiene","1250","2021-08-19","Javier Guadalupe Martínez Flores","hospital-acuña","Gasto funeral","JESUS ALBERTO CARDENAS BUENTELLO","admin@gmail.com","MAFJ981205HCLRLV04.pdf"," ","si","24/08/21","JESUS LOREDO GONZALEZ");
INSERT INTO correspondencia VALUES("107","25/08/21","Interna","Servicios","ghrhrhrh","2021-08-31","Danna Itzel-Asistente Administrativo A8","hospital"," Elaboracion o repoisicion de credencial de pensio","JESUS ALBERTO CARDENAS BUENTELLO","No aplica",""," "," "," "," ");





CREATE TABLE `crud_employees` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO crud_employees VALUES("32","LIC. JESUS LOREDO GONZALEZ","JEFE DE DEPARTAMENTO DE PENSIONES SERVICIOS E HIGIENE");
INSERT INTO crud_employees VALUES("33","LIC. ANNNA LIGIA GALINDO MADROÑO","JEFE DE SERVICIOS DE OPERACION DE PAGOS DE PRESUPUESTO");
INSERT INTO crud_employees VALUES("34","LIC. MARTIN ALEJANDRO MADRIGAL RIOS","SUBDELEGADO DE PRESTACIONES");
INSERT INTO crud_employees VALUES("35","LIC. JULIAN GARCIA HERNANDEZ","JEFE DE SERVICIOS DE OPERACION DE PAGOS DE PRESUPUESTO");
INSERT INTO crud_employees VALUES("36","LIC. ELISA MARIA NELSON ESCOBEDO","JEFE DE LA UNIDAD JURIDICA DEL ISSSTE EN COAHUILA");
INSERT INTO crud_employees VALUES("37","LIC. MAYRA BEREDNIZE LUNA ROCHA","LIQUIDADOR");
INSERT INTO crud_employees VALUES("38","LIC. RITA LETICIA CEJA MARTINEZ","JEFE/OFICINA/PENSION");





CREATE TABLE `destinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `extension` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO destinos VALUES("1","C. JUANA DEL RIO NUÑEZ  ","PRESTACIONES","MONCLOVA, COAHUILA","CALLE ROBLE Y OLIVO NO. 801, COL. FOVISSSTE  C.P. 25720  ","65792");
INSERT INTO destinos VALUES("2","DIR. RAUL MENDOZA MORQUECHO ","","TORREÓN, COAHUILA"," ABASOLO ESQ. CON FCO. I. MADERO, NO. 110, ZONA CENTRO. C.P. 27000","");
INSERT INTO destinos VALUES("3","DR. ADOLFO RAFEL VIRAMONTES SAMILPA","DIRECTOR DE LA CLÍNICA HOSPITAL","SALTILLO, COAHUILA","CALLE FRANCISCO MURGUÍA ESQ. MANUEL PÉREZ TREVIÑO N° 405 NTE. ZONA CENTRO C P 25000","");
INSERT INTO destinos VALUES("4","DR. ALEJANDRO GRANADOS MARTINEZ","JEFE DEL DEPARTAMENTO DE RIESGOS DE TRABAJO","CIUDAD DE MEXICO","AVE JESUS GARCIA NO. 140 PISO NO. 10 ala C  C.P.06350 DEL. CUAUHTEMOC","29009");
INSERT INTO destinos VALUES("5","DR. ANA MARIA DIAZ FRANCO","DIRECTORA DE LA CLINICA ","PIEDRAS NEGRAS, COAHUILA","AVENIDA LAZARO CARDENAS ESQUINA CON MAZATLAN, COLONIA ISSSTE C.P. 26070 ","48091 DIR");
INSERT INTO destinos VALUES("6","DR. INDALECIO JUAREZ MORENO","DIRECTORA DE LA CLINICA","SABINAS, COAHUILA","ALTAMIRANO NO. 756 COL. FEDERICO BERRUETO RAMON","65572");
INSERT INTO destinos VALUES("7","DR. JORGE LUIS VALDEZ FLORES","DIRECTOR DE LA CLINICA","NUEVA ROSITA, COAHUILA","CALLE 20 DE NOVIEMBRE No. 2748, COLONIA ZARAGOZA, C.P. 26860","65720");
INSERT INTO destinos VALUES("8","DR. JOSE PEREZ AGUILAR","DIRECTOR DE LA CLINICA ISSSTE","MONCLOVA, COAHUILA","ROBLE Y OLIVO 801, C.P. 25730, COL. FOVISSSTE\n","65795");
INSERT INTO destinos VALUES("9","DR. LUIS ENRIQUE CORTEZ","DIRECTOR DE LA CLINICA","ACUÑA, COAHUILA","BLVD.VICENTE GUERRERO Y DIAZ GUERRA","65782");
INSERT INTO destinos VALUES("10","DR. ROSSANA MARTINEZ MAYORGA","JEFA DE SERVICIOS DE SEGURIDAD E HIGIENE","CIUDAD DE MEXICO","AVE JESUS GARCIA NO. 140\nPISO NO. 10 ala B  C.P.06350\nDEL. CUAUHTEMOC\n","29010");
INSERT INTO destinos VALUES("11","DRA. ANA BERTHA RAMIREZ PEREZ","DIRECTOR DE LA CLINICA","PARRAS DE LA FUENTE, COAHUILA","BLVD. OSCAR FLORES TAPIA S/N","65552");
INSERT INTO destinos VALUES("12","DRA. MARIA GUADALUPE RAMOS GALLEGOS","DIRECTOR DE LA CLINICA","SAN PEDRO, COAHUILA","CALLE GRANADOS Y NOGAL S/N","65659");
INSERT INTO destinos VALUES("13","DRA. ROSA MARIA HERNANDEZ MEDINA","MEDICINA DEL TRABAJO","TORREÓN, COAHUILA","CALLE FRANCISCO I MADERO No. 110 NTE. ESQUINA CON ABASOLO, ZONA CENTRO C.P. 27000","");
INSERT INTO destinos VALUES("14","LIC. ANA LIGIA GALINDO MADRONO","JEFA DE SERVICIOS DE OPERACIÓN DE  PAGOS Y PRESUPUESTOS","CIUDAD DE MEXICO","AVE JESUS GARCIA NO. 140\nPISO NO. 10 C.P.06350\nDEL. CUAUHTEMOC","12016");
INSERT INTO destinos VALUES("15","LIC. CARLOS A. RODRIGUEZ GASCON","SUBDELEGADO DE PRESTACIONES EN NUEVO LEON","MONTERREY N.L.","CALLE HIDALGO PTE. No. 951, ZONA CENTRO\n","");
INSERT INTO destinos VALUES("16","LIC. HERLINDA MARISELA ROMERO FLORES","OFICINA DE PENSIONES","TORREÓN, COAHUILA","CALLE FRANCISCO I MADERO No. 110 NTE. ESQUINA CON ABASOLO, Zona Centro, C.P 27000","");
INSERT INTO destinos VALUES("17","LIC. MAYRA MOLINA GUZMAN"," JEFA DE SERVICIOS DE ASIGNACION DE DERECHOS","CIUDAD DE MEXICO","AVE JESUS GARCIA NO. 140\nPISO NO. 11 ala C  C.P.06350\nDEL. CUAUHTEMOC","");
INSERT INTO destinos VALUES("18","PROFR. HILARIO GONZALEZ LEGORRETA","SUBDELEGADO DE PRESTACIONES DEL ISSSTE EN DURANGO","DURANGO,DURANGO","BENIGNO MONTOYA S/N ESQ. 20 DE NOVIEMBRE, COLONIA GUILLERMINA C.P. 34270 ","");





CREATE TABLE `elaborar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pensionado` varchar(200) NOT NULL,
  `num_issste` varchar(30) NOT NULL,
  `curp` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `enviar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `clave` (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






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
  `cargo` varchar(30) NOT NULL,
  `rfc` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `permisos` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("2","MAYRA LUNA ROCHA","MAYRA LUNA","PROFESIONAL ADMINISTRATIVO A","LURM9110415H53","LURM","2");
INSERT INTO members VALUES("5","MARIA ELENA GUADALUPE VALDEZ TORRES","MARIA VALDEZ","PROFESIONAL ADMINISTRATIVO A","VATE830310DX0","MEGVT2106","2");
INSERT INTO members VALUES("6","RITA LETICIA CEJA MARTINEZ","RITA CEJA","JEFE/OFICINA/PENSION","CEMR570522944","RLCJ2106","2");
INSERT INTO members VALUES("7","NORMA HAEL NABTE PORTILLA","NORMA NABTE","ADMINISTRATIVO","NAPN870807N32","NHNP2106","2");
INSERT INTO members VALUES("8","SARA MARIA CISNEROS CASTRO","SARA CISNEROS","ASISTENTE ","CIC5570902","SMCC2106","2");
INSERT INTO members VALUES("9","REBECA LOPEZ ESTRADA","REBECA LOPEZ","ASISTENTE MEDICINA DEL TRABAJO","LOER601026","RLE2106","2");
INSERT INTO members VALUES("10","ROBERTO GARZON","ROBERTO GARZON","MEDICO DE MEDICINA DEL TRABAJO","GAMR850702","RGM2106","2");
INSERT INTO members VALUES("11","PATSY JANELY ESPINOZA GALINDO","PATSY ESPINOZA","ASISTENTE ADMINISTRATIVO A8","EIGP861030","PJEG2106","2");
INSERT INTO members VALUES("12","JULIA ISELA SANCHEZ HERNANDEZ","JULIA SANCHEZ","ADMINISTRATIVO","SAHJ901020","JISH2106","2");
INSERT INTO members VALUES("13","JUANA MARIA SANCHEZ ROBLEDO","JUANA SANCHEZ","APOYO ADMINISTRATIVO","RALR771119","JMSR2106","2");
INSERT INTO members VALUES("15","JESUS LOREDO GONZALEZ","JESUS LOREDO","JEFE/DPTO./SISTEMAS","LOGJ860909","JLG2106","1");
INSERT INTO members VALUES("16","STHEPANIE MICHELLE ZUÑIGA GARCIA","STHEPANIE ZUÑIGA","ABOGADA ADSCRITA ","ZUGS970312","SMZG2106","2");
INSERT INTO members VALUES("18","OSCAR ALEJANDRO MARTINEZ CERDA","OSCAR MARTINEZ","JEFE DE OFICINA DE SEG. E HIG.","MACO850525","OAMC1921","1");
INSERT INTO members VALUES("19","JESUS ALBERTO CARDENAS BUENTELLO","JESUS CARDENAS","DEV","","123","2");
INSERT INTO members VALUES("20","IRMA GUADALUPE GARCÍA REYES","IRMA GARCIA","LIQUIDADOR","","IRMA2106","2");
INSERT INTO members VALUES("21","WENDY MONCADA SALAS","WENDY MONCADA","APOYO ADMINISTRATIVO SALUD ","MOSW820807","WMS2106","2");
INSERT INTO members VALUES("22","MIGUEL ANGEL PEÑA BELTRAN","MIGUEL PEÑA","ADMINISTRATIVO EN SALUD","PEBM636111","MAPB0621","2");
INSERT INTO members VALUES("23","Javier Guadalupe","JAVI MARTINEZ","DESARROLLADOR","","1234","1");





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
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`minutario`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;

INSERT INTO respuesta VALUES("1","","","","","","");
INSERT INTO respuesta VALUES("2","SP/DPSH/CC/0002/2021","03/08/21","JESUS CARDENAS","CAMBIO DE CUOTA","2_03-08_08_40","PDF");
INSERT INTO respuesta VALUES("3","SP/DPSH/AD/0003/2021","03/08/21","JESUS CARDENAS","ALTA DE DEUDO","0003","PDF");
INSERT INTO respuesta VALUES("4","SP/DPSH/AD/0004/2021","03/08/21","JESUS CARDENAS","ALTA DE DEUDO","0004","PDF");
INSERT INTO respuesta VALUES("5","SP/DPSH/AD/0005/2021","03/08/21","JESUS CARDENAS","ALTA DE DEUDO","0005","PDF");
INSERT INTO respuesta VALUES("6","SP/DPSH/CC/0006/2021","03/08/21","JESUS CARDENAS","CAMBIO DE CUOTA","0006","PDF");
INSERT INTO respuesta VALUES("7","SP/DPSH/BP/0007/2021","03/08/21","JESUS CARDENAS","BAJA DE PENSION","0007","PDF");
INSERT INTO respuesta VALUES("8","SP/DPSH/AD/0008/2021","03/08/21","JESUS CARDENAS","ALTA DE DEUDO","8_03-08_12_10","PDF");
INSERT INTO respuesta VALUES("9","SP/DPSH/BP/0009/2021","03/08/21","JESUS CARDENAS","BAJA DE PENSION","0009","PDF");
INSERT INTO respuesta VALUES("10","SP/DPSH/CE/0010/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","0010","PDF");
INSERT INTO respuesta VALUES("11","SP/DPSH/CE/0011/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","0011","PDF");
INSERT INTO respuesta VALUES("12","SP/DPSH/CE/0012/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","0012","PDF");
INSERT INTO respuesta VALUES("13","SP/DPSH/CE/0013/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","0013","PDF");
INSERT INTO respuesta VALUES("14","SP/DPSH/CE/0014/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","0014","PDF");
INSERT INTO respuesta VALUES("15","SP/DPSH/CE/0015/2021","03/08/21","JESUS CARDENAS","CAMBIO DE ESTATUS","15_03-08_16_10","PDF");
INSERT INTO respuesta VALUES("16","SP/DPSH/SI/0016/2021","03/08/21","JESUS CARDENAS","BAJA DE SEGURO INSTITUCIONAL","0016","PDF");
INSERT INTO respuesta VALUES("17","SP/DPSH/SI/0017/2021","03/08/21","JESUS CARDENAS","BAJA DE SEGURO INSTITUCIONAL","17_03-08_17_37","PDF");
INSERT INTO respuesta VALUES("18","SP/DPSH/PD/0018/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0018","PDF");
INSERT INTO respuesta VALUES("19","SP/DPSH/PD/0019/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0019","PDF");
INSERT INTO respuesta VALUES("20","SP/DPSH/DB/0020/2021","03/08/21","JESUS CARDENAS","DESIGNACION DE BENEFICIARIOS 22","0020","PDF");
INSERT INTO respuesta VALUES("21","SP/DPSH/CCI/0021/2021","03/08/21","JESUS CARDENAS","CAMBIO DE CLAVE INTERBANCARIA","21_03-08_03_29","PDF");
INSERT INTO respuesta VALUES("22","SP/DPSH/EC/0022/2021","03/08/21","JESUS CARDENAS","ELABORACION DE CUENTA","0022","PDF");
INSERT INTO respuesta VALUES("23","SP/DPSH/NJ/0023/2021","03/08/21","JESUS CARDENAS","NOTIFICACION A JURIDICO","0023","PDF");
INSERT INTO respuesta VALUES("24","SP/DPSH/FC/0024/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0024","PDF");
INSERT INTO respuesta VALUES("25","SP/DPSH/FC/0025/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0025","PDF");
INSERT INTO respuesta VALUES("26","SP/DPSH/EP/0026/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0026","PDF");
INSERT INTO respuesta VALUES("27","SP/DPSH/FC/0027/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0027","PDF");
INSERT INTO respuesta VALUES("28","SP/DPSH/DS/0028/2021","03/08/21","JESUS CARDENAS","DEVOLUCION DE SENTENCIA","0028","PDF");
INSERT INTO respuesta VALUES("29","SP/DPSH/EP/0029/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0029","PDF");
INSERT INTO respuesta VALUES("30","SP/DPSH/FC/0030/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0030","PDF");
INSERT INTO respuesta VALUES("31","SP/DPSH/EP/0031/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0031","PDF");
INSERT INTO respuesta VALUES("32","SP/DPSH/DS/0032/2021","03/08/21","JESUS CARDENAS","DEVOLUCION DE SENTENCIA","0032","PDF");
INSERT INTO respuesta VALUES("33","SP/DPSH/DS/0033/2021","03/08/21","JESUS CARDENAS","DEVOLUCION DE SENTENCIA","33_03-08_05_23","PDF");
INSERT INTO respuesta VALUES("34","SP/DPSH/FC/0034/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0034","PDF");
INSERT INTO respuesta VALUES("35","SP/DPSH/FC/0035/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0035","PDF");
INSERT INTO respuesta VALUES("36","SP/DPSH/FC/0036/2021","","JESUS CARDENAS","FALTA DE CURP E INE","0036","PDF");
INSERT INTO respuesta VALUES("37","SP/DPSH/FC/0037/2021","","JESUS CARDENAS","FALTA DE CURP E INE","0037","PDF");
INSERT INTO respuesta VALUES("38","SP/DPSH/FC/0038/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0038","PDF");
INSERT INTO respuesta VALUES("39","SP/DPSH/FC/0039/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0039","PDF");
INSERT INTO respuesta VALUES("40","SP/DPSH/FC/0040/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0040","PDF");
INSERT INTO respuesta VALUES("41","SP/DPSH/FC/0041/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","0041","PDF");
INSERT INTO respuesta VALUES("42","SP/DPSH/EP/0042/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0042","PDF");
INSERT INTO respuesta VALUES("43","SP/DPSH/EP/0043/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0043","PDF");
INSERT INTO respuesta VALUES("44","SP/DPSH/EP/0044/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0044","PDF");
INSERT INTO respuesta VALUES("45","SP/DPSH/EP/0045/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","0045","PDF");
INSERT INTO respuesta VALUES("46","SP/DPSH/BP/0046/2021","03/08/21","JESUS CARDENAS","BAJA DE PENSION","0046","PDF");
INSERT INTO respuesta VALUES("47","SP/DPSH/BP/0047/2021","03/08/21","JESUS CARDENAS","BAJA DE PENSION","0047","PDF");
INSERT INTO respuesta VALUES("48","SP/DPSH/DB/0048/2021","03/08/21","JESUS CARDENAS","DESIGNACION DE BENEFICIARIOS 22","0048","PDF");
INSERT INTO respuesta VALUES("49","SP/DPSH/DB/0049/2021","03/08/21","JESUS CARDENAS","DESIGNACION DE BENEFICIARIOS 22","49_03-08_08_46","PDF");
INSERT INTO respuesta VALUES("50","SP/DPSH/PD/0050/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0050","PDF");
INSERT INTO respuesta VALUES("51","SP/DPSH/PD/0051/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0051","PDF");
INSERT INTO respuesta VALUES("52","SP/DPSH/PD/0052/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0052","PDF");
INSERT INTO respuesta VALUES("53","SP/DPSH/PD/0053/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","0053","PDF");
INSERT INTO respuesta VALUES("54","SP/DPSH/PD/0054/2021","03/08/21","JESUS CARDENAS","PETICION DE DOCUMENTOS","54_03-08_19_14","PDF");
INSERT INTO respuesta VALUES("55","SP/DPSH/EC/0055/2021","03/08/21","JESUS CARDENAS","ELABORACION DE CUENTA","0055","PDF");
INSERT INTO respuesta VALUES("56","SP/DPSH/EC/0056/2021","03/08/21","JESUS CARDENAS","ELABORACION DE CUENTA","0056","PDF");
INSERT INTO respuesta VALUES("57","SP/DPSH/NJ/0057/2021","03/08/21","JESUS CARDENAS","NOTIFICACION A JURIDICO","57_03-08_36_08","PDF");
INSERT INTO respuesta VALUES("58","SP/DPSH/EP/0058/2021","03/08/21","JESUS CARDENAS","ESCRITO DE PETICION","58_03-08_03_49","PDF");
INSERT INTO respuesta VALUES("59","SP/DPSH/FC/0059/2021","03/08/21","JESUS CARDENAS","FALTA DE CURP E INE","59_03-08_40_06","PDF");
INSERT INTO respuesta VALUES("60","SP/DPSH/BP/0060/2021","03/08/21","JESUS CARDENAS","BAJA DE PENSION","60_03-08_14_42","PDF");
INSERT INTO respuesta VALUES("62","SP/DPSH/EC/0061/2021","03/08/21","JESUS CARDENAS","ELABORACION DE CUENTA","62_03-08_11_47","PDF");
INSERT INTO respuesta VALUES("63","SP/DPSH/NJ/0063/2021","03/08/21","JESUS CARDENAS","NOTIFICACION A JURIDICO","0063","PDF");
INSERT INTO respuesta VALUES("64","SP/DPSH/NJ/0064/2021","03/08/21","JESUS CARDENAS","NOTIFICACION A JURIDICO","0064","PDF");
INSERT INTO respuesta VALUES("65","SP/DPSH/NJ/0065/2021","03/08/21","JESUS CARDENAS","NOTIFICACION A JURIDICO","0065","PDF");
INSERT INTO respuesta VALUES("66","777887","03/08/21","JESUS ALBERTO CARDENAS BUENTELLO","jjujuu","","Respuesta");
INSERT INTO respuesta VALUES("67","777776666676","03/08/21","SARA MARIA CISNEROS CASTRO","sasasasasasas","20210813122452876.pdf","Respuesta");
INSERT INTO respuesta VALUES("68","YO MERO","24/08/21","JESUS LOREDO GONZALEZ","FFFFF","PREREGISTRO_CU.pdf","Respuesta");



