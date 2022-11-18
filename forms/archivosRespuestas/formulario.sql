-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2021 a las 20:10:45
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correspondencia`
--

CREATE TABLE `correspondencia` (
  `id` int(10) NOT NULL,
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
  `archivoRespuesta` varchar(100) NOT NULL,
  `trabajado` varchar(5) NOT NULL,
  `fechaTrabajo` varchar(15) NOT NULL,
  `trabajo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `correspondencia`
--

INSERT INTO `correspondencia` (`id`, `fecha`, `correspondencia`, `servicio`, `folio`, `fechaOficio`, `solicita`, `dep`, `tema`, `asigno`, `datos`, `archivo`, `archivoRespuesta`, `trabajado`, `fechaTrabajo`, `trabajo`) VALUES
(11, '16/06/21', 'Interna', 'Servicios', 'fff', '2021-06-17', 'fff', 'Hospital-Monclova', ' Elaboracion o repoisicion de credencial de pensio', 'aaa', 'fff', 'License.pdf', '', ' ', ' ', ' '),
(12, '16/06/21', 'Interna', 'Seguridad e higiene', '12', '2021-06-10', 'Javier Guadalupe', 'Medica', ' Riesgo de trabajo - dd', 'oscar', 'No aplica', 'SANDRA_U21.pdf', '', 'si', '18/06/21', 'Mayra Luna Rocha'),
(13, '28/06/21', 'Interna', 'Medicia del trabajo', '132ññññ', '2021-06-03', 'LIC.MARIA DEL CONSUELO REYNA LARA ', 'Hospital-Monclova', ' Otros - mkkkk', 'llll', 'No aplica', 'oficina.jpg', ' ', 'si', '02/07/21', 'JESUS ALBERTO CARDENAS BUENTELLO'),
(14, '15/07/21', 'Interna', 'Servicios', '12312312333333', '2021-06-29', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', ' Gasto funeral ', 'qwe', 'No aplica', '', ' ', ' ', ' ', ' '),
(15, '15/07/21', 'Externa', 'servicios', '05187233123333', '2021-07-04', '123', 'No aplica', ' Certificado de poliza - 12', '3123', 'No aplica  ', '350190601847.pdf', ' ', ' ', ' ', ' '),
(16, '15/07/21', 'Interna', 'Servicios', '051872312312ss', '2021-07-11', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', ' Certificado de poliza ', '', 'No aplica', '', ' ', ' ', ' ', ' '),
(22, '15/07/21', 'Interna', 'Medicia del trabajo', '051872322222', '2021-07-10', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Fco. I. Madero', ' Inconformidades ', '123', 'No aplica', '350190601847.pdf', ' ', ' ', ' ', ' '),
(24, '15/07/21', 'Interna', 'Seguridad e higiene', '123123132', '2021-07-05', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Monclova', ' Subsidio - 12', 'qw', 'No aplica', '350190601847.pdf', ' ', ' ', ' ', ' '),
(25, '15/07/21', 'Interna', 'Servicios', '051872399999', '2021-06-29', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', ' Certificado de poliza ', 'ew', 'No aplica', '', ' ', ' ', ' ', ' '),
(26, '15/07/21', 'Interna', 'Servicios', '0518723', '2021-07-19', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Monclova', ' Gasto funeral ', 'asd', 'No aplica', '', ' ', ' ', ' ', ' '),
(27, '15/07/21', 'Interna', 'Servicios', '0518723guuu', '2021-07-10', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Torreon', ' Certificado de poliza ', 'ghj', 'No aplica', '', ' ', ' ', ' ', ' '),
(28, '15/07/21', 'Interna', 'Seguridad e higiene', '0518723yuuuu', '2021-07-06', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Monclova', ' Riesgo de trabajo ', 'ghj', 'No aplica', '350190601847.pdf', ' ', ' ', ' ', ' '),
(29, '15/07/21', 'Interna', 'Servicios', '0518723eeeeee', '2021-06-29', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', ' Gasto funeral ', 'dasd', 'No aplica', '20190808072232398.pdf', ' ', ' ', ' ', ' '),
(30, '15/07/21', 'Interna', 'cumplimiento de sentencia', '44545454', '2021-07-14', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', 'Amparo - Pensiones por jubliacion  ', 'adsw', 'No aplica', '350190601847 (1).pdf', ' ', ' ', ' ', ' '),
(32, '15/07/21', 'Externa', 'servicios', '051872333333', '2021-06-30', '123123', 'No aplica', ' Certificado de poliza - 123123', '123123', 'No aplica  ', '39862420.pdf', ' ', ' ', ' ', ' '),
(33, '15/07/21', 'Externa', 'Seguridad e Higiene', '2222222222222222', '2021-07-14', 'ssss', 'No aplica', ' Riesgo de trabajo - s', 'sss', 'No aplica  ', '20190808072232398.pdf', ' ', ' ', ' ', ' '),
(34, '15/07/21', 'Externa', 'Medicina del trabajo', '12322222', '2021-07-21', 'PATRICIA ELENA GALINDO CARMONA', 'No aplica', ' Expediente-Copia certificada - 123123', 'asdsa', 'No aplica  ', '350190601847 (1) (1).pdf', ' ', ' ', ' ', ' '),
(36, '15/07/21', 'Externa', 'Cumplimiento de sentencia', '05187234444343', '2021-07-02', '123123123', 'No aplica', ' Viudez ', '123123123', 'No aplica  ', '350190601847.pdf', ' ', ' ', ' ', ' '),
(38, '15/07/21', 'Interna', 'Servicios', '051872322222222222', '2021-06-29', 'PATRICIA ELENA GALINDO CARMONA', 'Hospital-Parras', ' Constancia de estudio ', 'qweqweq', 'No aplica', '350190601847 (1).pdf', ' ', ' ', ' ', ' '),
(39, '15/07/21', 'Interna', 'Servicios', '0518723ssssssssssss', '2021-07-06', 'PATRICIA ELENA GALINDO CARMONA', 'recursos financieros', ' Certificado de poliza ', 'JESUS ALBERTO CARDENAS BUENTELLO', 'No aplica', '350190601847 (1) (1).pdf', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `extension` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`nombre`, `cargo`, `ciudad`, `direccion`, `extension`) VALUES
('C. JUANA DEL RIO NUÑEZ  ', 'PRESTACIONES', 'MONCLOVA, COAHUILA', 'CALLE ROBLE Y OLIVO NO. 801, COL. FOVISSSTE  C.P. 25720  ', '65792'),
('DIR. RAUL MENDOZA MORQUECHO ', '', 'TORREÓN, COAHUILA', ' ABASOLO ESQ. CON FCO. I. MADERO, NO. 110, ZONA CENTRO. C.P. 27000', ''),
('DR. ADOLFO RAFEL VIRAMONTES SAMILPA', 'DIRECTOR DE LA CLÍNICA HOSPITAL', 'SALTILLO, COAHUILA', 'CALLE FRANCISCO MURGUÍA ESQ. MANUEL PÉREZ TREVIÑO N° 405 NTE. ZONA CENTRO C P 25000', ''),
('DR. ALEJANDRO GRANADOS MARTINEZ', 'JEFE DEL DEPARTAMENTO DE RIESGOS DE TRABAJO', 'CIUDAD DE MEXICO', 'AVE JESUS GARCIA NO. 140 PISO NO. 10 ala C  C.P.06350 DEL. CUAUHTEMOC', '29009'),
('DR. ANA MARIA DIAZ FRANCO', 'DIRECTORA DE LA CLINICA ', 'PIEDRAS NEGRAS, COAHUILA', 'AVENIDA LAZARO CARDENAS ESQUINA CON MAZATLAN, COLONIA ISSSTE C.P. 26070 ', '48091 DIR'),
('DR. INDALECIO JUAREZ MORENO', 'DIRECTORA DE LA CLINICA', 'SABINAS, COAHUILA', 'ALTAMIRANO NO. 756 COL. FEDERICO BERRUETO RAMON', '65572'),
('DR. JORGE LUIS VALDEZ FLORES', 'DIRECTOR DE LA CLINICA', 'NUEVA ROSITA, COAHUILA', 'CALLE 20 DE NOVIEMBRE No. 2748, COLONIA ZARAGOZA, C.P. 26860', '65720'),
('DR. JOSE PEREZ AGUILAR', 'DIRECTOR DE LA CLINICA ISSSTE', 'MONCLOVA, COAHUILA', 'ROBLE Y OLIVO 801, C.P. 25730, COL. FOVISSSTE\r\n', '65795'),
('DR. LUIS ENRIQUE CORTEZ', 'DIRECTOR DE LA CLINICA', 'ACUÑA, COAHUILA', 'BLVD.VICENTE GUERRERO Y DIAZ GUERRA', '65782'),
('DR. ROSSANA MARTINEZ MAYORGA', 'JEFA DE SERVICIOS DE SEGURIDAD E HIGIENE', 'CIUDAD DE MEXICO', 'AVE JESUS GARCIA NO. 140\r\nPISO NO. 10 ala B  C.P.06350\r\nDEL. CUAUHTEMOC\r\n', '29010'),
('DRA. ANA BERTHA RAMIREZ PEREZ', 'DIRECTOR DE LA CLINICA', 'PARRAS DE LA FUENTE, COAHUILA', 'BLVD. OSCAR FLORES TAPIA S/N', '65552'),
('DRA. MARIA GUADALUPE RAMOS GALLEGOS', 'DIRECTOR DE LA CLINICA', 'SAN PEDRO, COAHUILA', 'CALLE GRANADOS Y NOGAL S/N', '65659'),
('DRA. ROSA MARIA HERNANDEZ MEDINA', 'MEDICINA DEL TRABAJO', 'TORREÓN, COAHUILA', 'CALLE FRANCISCO I MADERO No. 110 NTE. ESQUINA CON ABASOLO, ZONA CENTRO C.P. 27000', ''),
('LIC. ANA LIGIA GALINDO MADRONO', 'JEFA DE SERVICIOS DE OPERACIÓN DE  PAGOS Y PRESUPUESTOS', 'CIUDAD DE MEXICO', 'AVE JESUS GARCIA NO. 140\r\nPISO NO. 10 C.P.06350\r\nDEL. CUAUHTEMOC', '12016'),
('LIC. CARLOS A. RODRIGUEZ GASCON', 'SUBDELEGADO DE PRESTACIONES EN NUEVO LEON', 'MONTERREY N.L.', 'CALLE HIDALGO PTE. No. 951, ZONA CENTRO\r\n', ''),
('LIC. HERLINDA MARISELA ROMERO FLORES', 'OFICINA DE PENSIONES', 'TORREÓN, COAHUILA', 'CALLE FRANCISCO I MADERO No. 110 NTE. ESQUINA CON ABASOLO, Zona Centro, C.P 27000', ''),
('LIC. MAYRA MOLINA GUZMAN', ' JEFA DE SERVICIOS DE ASIGNACION DE DERECHOS', 'CIUDAD DE MEXICO', 'AVE JESUS GARCIA NO. 140\r\nPISO NO. 11 ala C  C.P.06350\r\nDEL. CUAUHTEMOC', ''),
('PROFR. HILARIO GONZALEZ LEGORRETA', 'SUBDELEGADO DE PRESTACIONES DEL ISSSTE EN DURANGO', 'DURANGO,DURANGO', 'BENIGNO MONTOYA S/N ESQ. 20 DE NOVIEMBRE, COLONIA GUILLERMINA C.P. 34270 ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elaborar`
--

CREATE TABLE `elaborar` (
  `id` int(11) NOT NULL,
  `pensionado` varchar(200) NOT NULL,
  `num_issste` varchar(30) NOT NULL,
  `curp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enviar`
--

CREATE TABLE `enviar` (
  `id` int(11) NOT NULL,
  `clave` varchar(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `oficio1` varchar(30) NOT NULL,
  `oficio2` varchar(30) NOT NULL,
  `oficio3` varchar(30) NOT NULL,
  `oficio4` varchar(30) NOT NULL,
  `oficio5` varchar(30) NOT NULL,
  `oficio6` varchar(35) NOT NULL,
  `oficio7` varchar(35) NOT NULL,
  `oficio8` varchar(35) NOT NULL,
  `oficio9` varchar(35) NOT NULL,
  `oficio10` varchar(35) NOT NULL,
  `oficio11` varchar(35) NOT NULL,
  `oficio12` varchar(35) NOT NULL,
  `oficio13` varchar(35) NOT NULL,
  `oficio14` varchar(35) NOT NULL,
  `oficio15` varchar(35) NOT NULL,
  `oficio16` varchar(35) NOT NULL,
  `oficio17` varchar(35) NOT NULL,
  `oficio18` varchar(35) NOT NULL,
  `oficio19` varchar(35) NOT NULL,
  `oficio20` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enviar`
--

INSERT INTO `enviar` (`id`, `clave`, `nombre`, `cargo`, `direccion`, `ciudad`, `oficio1`, `oficio2`, `oficio3`, `oficio4`, `oficio5`, `oficio6`, `oficio7`, `oficio8`, `oficio9`, `oficio10`, `oficio11`, `oficio12`, `oficio13`, `oficio14`, `oficio15`, `oficio16`, `oficio17`, `oficio18`, `oficio19`, `oficio20`) VALUES
(1, '', 'LIC. MAYRA MOLINA GUZMAN', ' JEFA DE SERVICIOS DE ASIGNACION DE DERECHOS', 'AVE JESUS GARCIA NO. 140\r\nPISO NO. 11 ala C  C.P.06350\r\nDEL. CUAUHTEMOC', 'CIUDAD DE MEXICO', '1515151515', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'F5D6', 'JESUS ALBERTO CARDENAS BUENTELLO', 'asdasdas', 'CALLE DIVISION DEL NORTE COLONIA CERRO DEL PUEBLO C.P25140', 'SALTILLO COAH.', '1515151515', '12312312312', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'C80B', 'LIC. MAYRA MOLINA GUZMAN', ' JEFA DE SERVICIOS DE ASIGNACION DE DERECHOS', 'AVE JESUS GARCIA NO. 140\r\nPISO NO. 11 ala C  C.P.06350\r\nDEL. CUAUHTEMOC', 'CIUDAD DE MEXICO', '1515151515', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `rfc` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `permisos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `nombre`, `usuario`, `cargo`, `rfc`, `contrasena`, `permisos`) VALUES
(1, 'javier guadalupe martinez Flores', 'javier martinez', 'admin', '12345', 'wwe', '1'),
(2, 'Mayra Luna Rocha', 'Mayra Luna', 'Profesional Adminidtrativo A', 'LURM9110415H53', 'LURM', '2'),
(4, 'javi', 'ark', '1', '4454545454', 'wwe', '1'),
(5, 'Maria Elena Guadalupe Valdés Torres', 'Maria Elena Valdés', 'Profesion Administrativo A', 'VATE830310DX0', 'MEGVT2106', '2'),
(6, 'Rita Leticia Ceja Martínez', 'Rita Ceja', 'Jefe/oficina/pension', 'CEMR570522944', 'RLCJ2106', '2'),
(7, 'Norma Hael Nabté Portilla', 'Norma Nabté', 'Administrativo', 'NAPN870807N32', 'NHNP2106', '2'),
(8, 'Sara María Cisneros Castro', 'Sara Cisneros', 'Asistente Administrativo A8', 'CIC5570902', 'SMCC2106', '2'),
(9, 'Rebeca López Estrada', 'Rebeca López', 'Asistente medicina del trabajo', 'LOER601026', 'RLE2106', '2'),
(10, 'Roberto Garzon Mvdi', 'Roberto Garzon', 'Medico de medicina del trabajo', 'GAMR850702', 'RGM2106', '2'),
(11, 'Patsy Janely Espinoza Galindo', 'Patsy Espinoza', 'Asistente Administrativo A8', 'EIGP861030', 'PJEG2106', '2'),
(12, 'Julia Isela Sánchez Hernández', 'JULIA SANCHEZ', 'Administrativo', 'SAHJ901020', 'JISH2106', '2'),
(13, 'Juana María Sánchez Robledo', 'JUANA SANCHEZ', 'Apoyo Administrativo', 'RALR771119', 'JMSR2106', '2'),
(15, 'JESUS LOREDO GONZALEZ', 'JESUS LOREDO', 'JEFE/DPTO./PENSIONES', 'LOGJ860909', 'JLG2106', '1'),
(16, 'Sthepanie Michelle Zuñiga García', 'STHEPANIE ZUÑIGA', 'ABOGADA ADSCRITA ', 'ZUGS970312', 'SMZG2106', '2'),
(17, 'JESUS ALBERTO CARDENAS BUENTELLO', 'jesus', 'dev', 'asd', '123', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `ID` int(9) UNSIGNED NOT NULL,
  `para` varchar(180) DEFAULT NULL,
  `de` varchar(180) DEFAULT NULL,
  `leido` varchar(180) DEFAULT NULL,
  `fecha` varchar(180) DEFAULT NULL,
  `asunto` varchar(180) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `permisos` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `correo`, `contrasena`, `permisos`) VALUES
('Javier Guadalupe', 'arekflores123@gmail.com', '12345', 'total'),
('Arek Javir', 'aaaa', 'admin', 'consutlas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `minutario` int(11) NOT NULL,
  `folio` varchar(25) NOT NULL,
  `fechaRespuesta` varchar(10) NOT NULL,
  `nombreRespuesta` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `archivoRespuesta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`minutario`, `folio`, `fechaRespuesta`, `nombreRespuesta`, `descripcion`, `archivoRespuesta`) VALUES
(1, '8888', '23/05/21', 'JESUS ALBERTO CARDENAS BUENTELLO', '12312312qweqweqew', 'interna-sentencia.php'),
(2, 'SP/032-2021', '23/05/21', 'JESUS ALBERTO CARDENAS BUENTELLO', 'Esto es una respuesta', 'CORRESPONDENCIA.pptx'),
(3, '8888', '04/06/21', 'JESUS ALBERTO CARDENAS BUENTELLO', '', ''),
(4, '558787', '04/06/21', '', 'jhjhjhj', ''),
(5, '1234', '04/06/21', '', 'hola', ''),
(6, '1234', '14/06/21', '', 'gg', ''),
(11, '12', '18/06/21', 'Mayra Luna Rocha', 'hola', 'BDCONUBE-U4-SH3-Javier.pdf'),
(12, 'SP/DPSH/BP/0012/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(13, 'SP/DPSH/BP/0013/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(14, 'SP/DPSH/CCPD/0014/2021', ' ', 'jesus', 'cambio de cuota', ''),
(15, 'SP/DPSH/CCPD/0015/2021', ' ', 'jesus', 'cambio de cuota', ''),
(16, 'SP/DPSH/CCPD/0016/2021', ' ', 'jesus', 'cambio de cuota', ''),
(17, 'SP/DPSH/CCPD/0017/2021', ' ', 'jesus', 'cambio de cuota', ''),
(18, 'SP/DPSH/CCPD/0018/2021', ' ', 'jesus', 'cambio de cuota', ''),
(19, 'SP/DPSH/CCPD/0019/2021', ' ', 'jesus', 'cambio de cuota', ''),
(20, 'SP/DPSH/AD/0020/2021', ' ', 'jesus', 'alta de deudo', ''),
(21, 'SP/DPSH/AD/0021/2021', ' ', 'jesus', 'alta de deudo', ''),
(22, 'SP/DPSH/AD/0022/2021', ' ', 'jesus', 'alta de deudo', ''),
(23, 'SP/DPSH/AD/0023/2021', ' ', 'jesus', 'alta de deudo', ''),
(24, 'SP/DPSH/AD/0024/2021', ' ', 'jesus', 'alta de deudo', ''),
(25, 'SP/DPSH/AD/0025/2021', ' ', 'jesus', 'alta de deudo', ''),
(26, 'SP/DPSH/AD/0026/2021', ' ', 'jesus', 'alta de deudo', ''),
(27, 'SP/DPSH/AD/0027/2021', ' ', 'jesus', 'alta de deudo', ''),
(28, 'SP/DPSH/BP/0028/2021', ' ', 'jesus', 'baja de pension', ''),
(29, 'SP/DPSH/BP/0029/2021', ' ', 'jesus', 'baja de pension', ''),
(30, 'SP/DPSH/BP/0030/2021', ' ', 'jesus', 'baja de pension', ''),
(31, 'SP/DPSH/BP/0031/2021', ' ', 'jesus', 'baja de pension', ''),
(32, 'SP/DPSH/BP/0032/2021', ' ', 'jesus', 'baja de pension', ''),
(33, 'SP/DPSH/BP/0033/2021', ' ', 'jesus', 'baja de pension', ''),
(34, 'SP/DPSH/BP/0034/2021', ' ', 'jesus', 'baja de pension', ''),
(35, 'SP/DPSH/CE/0035/2021', ' ', 'jesus', 'cambio de estatus', ''),
(36, 'SP/DPSH/CE/0036/2021', ' ', 'jesus', 'cambio de estatus', ''),
(37, 'SP/DPSH/CE/0037/2021', ' ', 'jesus', 'cambio de estatus', ''),
(38, 'SP/DPSH/CE/0038/2021', ' ', 'jesus', 'cambio de estatus', ''),
(39, 'SP/DPSH/CE/0039/2021', ' ', 'jesus', 'cambio de estatus', ''),
(40, 'SP/DPSH/CE/0040/2021', ' ', 'jesus', 'cambio de estatus', ''),
(41, 'SP/DPSH/CE/0041/2021', ' ', 'jesus', 'cambio de estatus', ''),
(42, 'SP/DPSH/CE/0042/2021', ' ', 'jesus', 'cambio de estatus', ''),
(43, 'SP/DPSH/CE/0043/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(44, 'SP/DPSH/CE/0044/2021', ' ', 'jesus', 'peticion de documentos', ''),
(45, 'SP/DPSH/CE/0045/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(46, 'SP/DPSH/CE/0046/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(47, 'SP/DPSH/CE/0047/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(48, 'SP/DPSH/CE/0048/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(49, 'SP/DPSH/CE/0049/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(50, 'SP/DPSH/CE/0050/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(51, 'SP/DPSH/CE/0051/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(52, 'SP/DPSH/CE/0052/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(53, 'SP/DPSH/CE/0053/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(54, 'SP/DPSH/CE/0054/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(55, 'SP/DPSH/CE/0055/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(56, 'SP/DPSH/CE/0056/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(57, 'SP/DPSH/CE/0057/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(58, 'SP/DPSH/CE/0058/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(59, 'SP/DPSH/CE/0059/2021', ' ', 'jesus', 'peticion de documentos', ''),
(60, 'SP/DPSH/CE/0060/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(61, 'SP/DPSH/CE/0061/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(62, 'SP/DPSH/CE/0062/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(63, 'SP/DPSH/CE/0063/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(64, 'SP/DPSH/CE/0064/2021', ' ', 'jesus', 'baja seguro institucional', ''),
(65, 'SP/DPSH/CE/0065/2021', ' ', 'jesus', 'peticion de documentos', ''),
(66, 'SP/DPSH/BP/0066/2021', ' ', 'jesus', 'cambio de clave interbancaria', ''),
(67, 'SP/DPSH/BP/0067/2021', ' ', 'jesus', 'cambio de clave interbancaria', ''),
(68, 'SP/DPSH/BP/0068/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(69, 'SP/DPSH/BP/0069/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(70, 'SP/DPSH/BP/0070/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(71, 'SP/DPSH/BP/0071/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(72, 'SP/DPSH/BP/0072/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(73, 'SP/DPSH/BP/0073/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(74, 'SP/DPSH/BP/0074/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(75, 'SP/DPSH/BP/0075/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(76, 'SP/DPSH/BP/0076/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(77, 'SP/DPSH/BP/0077/2021', ' ', 'jesus', 'designacion de beneficiarios 22', ''),
(78, 'SP/DPSH/BP/0078/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(79, 'SP/DPSH/BP/0079/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(80, 'SP/DPSH/BP/0080/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(81, 'SP/DPSH/BP/0081/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(82, 'SP/DPSH/BP/0082/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(83, 'SP/DPSH/BP/0083/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(84, 'SP/DPSH/BP/0084/2021', ' ', 'jesus', 'Elaboracion de cuenta', ''),
(85, 'SP/DPSH/CE/0085/2021', ' ', 'jesus', 'peticion de documentos', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correspondencia`
--
ALTER TABLE `correspondencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `folio` (`folio`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `elaborar`
--
ALTER TABLE `elaborar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enviar`
--
ALTER TABLE `enviar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clave` (`clave`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`minutario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correspondencia`
--
ALTER TABLE `correspondencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `elaborar`
--
ALTER TABLE `elaborar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enviar`
--
ALTER TABLE `enviar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `ID` int(9) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `minutario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
