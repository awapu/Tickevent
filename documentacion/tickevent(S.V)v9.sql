DROP DATABASE IF EXISTS tickeventv9;
CREATE DATABASE tickeventv9;
USE tickeventv9;

-- Estructura de tabla para la tabla `categorias`
-- TICKEVENT`

DROP TABLE IF EXISTS `categorias_eventos`;
CREATE TABLE `categorias_eventos` (
  `id_categoria_ev` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
);
-- Indice de la tabla `categorias`
--
ALTER TABLE `categorias_eventos`
  ADD PRIMARY KEY (`id_categoria_ev`);

--
-- Volcado de datos para la tabla `categorias`

INSERT INTO `categorias_eventos` (`id_categoria_ev`, `descripcion`) VALUES
('CTG0001', 'musica'),
('CTG0002', 'negocios'),
('CTG0003', 'gastronomia'),
('CTG0004', 'artes'),
('CTG0005', 'cine y medios de comunicacion'),
('CTG0006', 'deportes y salud'),
('CTG0007', 'ciencia y tecnologia'),
('CTG0008', 'actividades al aire libre'),
('CTG0009', 'educacion');

DROP TABLE IF EXISTS `categorias_servicios`;
CREATE TABLE `categorias_servicios` (
  `id_categorias_servicio` INT,
  `descripcion` varchar(100) CHARACTER SET utf8 NOT NULL
);
-- Indice de la tabla `servicios`
--
  ALTER TABLE `categorias_servicios`
  MODIFY `id_categorias_servicio` INT PRIMARY KEY AUTO_INCREMENT;
--
--
-- Volcado de datos para la tabla `servicios`
--
INSERT INTO `categorias_servicios` (`descripcion`) VALUES
('Alquiler de juegos inflables'),
('Alquiler de piscinas portatiles para parques'),
('Alquiler de espacios'),
('Alquiler de logistica, programacion de actividades'),
('Alquiler de tarimas separadores  y estructuras'),
('Alquiler de Instalacion de equipos musicales, soniod  y/o video'),
('Servicios de bufett y/o alimentos'),
('Servicios de decoracion'),
('Servicios de entretenimiento infantil titeres'),
('Servicios de entretenimiento infantil payasos y mimos'),
('Servicios de coreografias'),
('Servicios de minitecas'),
('Servicios de DJ');


-- Estructura de tabla para la tabla `rol`
--


DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id_rol` INT,
  `nombre rol` varchar(50) NOT NULL
);
-- Indice de la tabla `categorias`
--
ALTER TABLE `rol`
  MODIFY `id_rol` INT PRIMARY KEY AUTO_INCREMENT;

--
-- Volcado de datos para la tabla `categorias`

INSERT INTO `rol` (`nombre rol`) VALUES
('promotor'),
('regular');

-- Estructura de tabla para la tabla `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(30) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_rol` INT,
  `politicadata` char(1) NOT NULL,
  `razonsocial` varchar(30) CHARACTER SET utf8 DEFAULT NULL);
--
-- Indice de la tabla `usuarios`
--
  ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
	ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol`(`id_rol`);
--
-- Volcado de datos para la tabla `usuarios`
--
INSERT INTO `usuarios` (`cedula_usuario`, `nombres`, `apellidos`) VALUES
(263364, 'Luis', 'Suarez'),
(4611335, 'Jose', 'Elvira'),
(4613691, 'Ortega', 'Alvear'),
(6760943, 'Oscar', 'Castillo'),
(10295280, 'Jesus', 'Teran'),
(10525832, 'Gerardo', 'Ceron'),
(10527966, 'Jesus', 'Ramirez'),
(10529900, 'Jorge', 'Caldas'),
(10533149, 'Jose', 'Vidal'),
(10533156, 'Luis', 'Andrade'),
(10536636, 'Jaramillo'),
(10537683, 'Lopez', 'Alban'),
(10541455, 'Hugo', 'Velasco'),
(10545657, 'Cabrera', 'Anaya'),
(10545987, 'Silvio', 'Gomez'),
(10548116, 'Jaime', 'Solarte'),
(12976097, 'Gilberto', 'Pantoja'),
(16738295, 'Ricardo', 'Benitez'),
(18125465, 'Wilson', 'Rosero'),
(25277918, 'Gloria', 'Fernandez'),
(31213007, 'Maria', 'Alegria'),
(31946378, 'Luz', 'Marinez'),
(34531233, 'Josefina', 'Munoz'),
(34537236, 'Adriana', 'Lopez'),
(34538776, 'Camayo', 'Alzate'),
(34551703, 'Beatriz', 'Sanchez'),
(34558659, 'Clara', 'Cortes'),
(34564081, 'Gloria', 'Solano'),
(34570500, 'Monica', 'Quina'),
(41573309, 'Maria', 'Lugo'),
(41640024, 'Isabel', 'Realpe'),
(41733718, 'Vejarano', 'Alvarez'),
(42870562, 'Lopez', 'Agudelo'),
(45766496, 'Martha', 'usserMaLo45'),
(48600072, 'Sandra', 'Collazos'),
(53170834, 'jose', 'ceron', 'Fais'),
(75076432, 'Garcia', 'Aguirre'),
(76288230, 'Fernandez', 'Alegria'),
(76306105, 'Henry', 'Escobar'),
(76317155, 'Velasquez', 'Alegria'),
(76324843, 'Hugo', 'Ceron'),
(87246681, 'Hector', 'Palacios');



-- Estructura de tabla para la tabla `perfil`
--
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL PRIMARY KEY,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_rol` INT);
--
-- Indice de la tabla `perfil`
--
  ALTER TABLE `perfil`
	ADD CONSTRAINT `fk_id_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `usuarios`(`cedula_usuario`);
--
-- Volcado de datos para la tabla `perfil`
--
INSERT INTO `perfil` (`id_perfil`, `usuario`, `pass`, `edad`, `correo`, `id_rol`) VALUES
(263364, 'usserLuSu26', 'pass0014', 18, 'luissuarez@gmail.com', 1),
(4611335, 'usserJoEl46', 'pass0038', 57, 'joseelvira@gmail.com', 2),
(4613691, 'usserOrAl46', 'pass0009', 50, 'ortegaalvear@gmail.com', 2),
(6760943, 'usserOsCa67', 'pass0027', 98, 'oscarcastillo@gmail.com', 2),
(10295280, 'usserJeTe10', 'pass0040', 19, 'jesusteran@gmail.com', 1),
(10525832, 'usserGeCe10', 'pass0037', 88, 'gerardoceron@gmail.com', 1),
(10527966, 'usserJeRa10', 'pass0013', 90, 'jesusramirez@gmail.com', 1),
(10529900, 'usserJoCa10', 'pass0012', 56, 'jorgecaldas@gmail.com', 1),
(10533149, 'usserJoVi10', 'pass0020', 29, 'josevidal@gmail.com', 2),
(10533156, 'usserLuAn10', 'pass0028', 30, 'luisandrade@gmail.com', 1),
(10536636, 'Ali Duvaam', 'pass0007', 20, 'jaramilloalvarez@gmail.com', 2),
(10537683, 'Abisted', 'pass0004', 31, 'lopezalban@gmail.com', 1),
(10541455, 'usserHuVe10', 'pass0022', 23, 'hugovelasco@gmail.com', 2),
(10545657, 'usserCaAn10', 'pass0011', 79, 'cabreraanaya@elpirata.com', 2),
(10545987, 'usserSiGo10', 'pass0035', 64, 'silviogomez@gmail.com', 2),
(10548116, 'usserJaSo10', 'pass0032', 80, 'jaimesolarte@gmail.com', 1),
(12976097, 'usserGiPa12', 'pass0030', 42, 'gilbertopantoja@gmail.com', 1),
(16738295, 'usserRiBe16', 'pass0026', 65, 'ricardobenitez@gmail.com', 2),
(18125465, 'usserWiRo18', 'pass0021', 89, 'wilsonrosero@gmail.com', 1),
(25277918, 'usserGlFe25', 'pass0019', 52, 'gloriafernandez@gmail.com', 2),
(31213007, 'usserMaAl31', 'pass0025', 23, 'mariaalegria@gmail.com', 1),
(31946378, 'usserLuMa31', 'pass0034', 32, 'luzmarinez@gmail.com', 2),
(34531233, 'usserJoMu34', 'pass0036', 88, 'josefinamunoz@gmail.com', 2),
(34537236, 'usserAdLo34', 'pass0041', 56, 'adrianalopez@gmail.com', 1),
(34538776, 'usserCaAl34', 'pass0010', 71, 'camayoalzate@gmail.com', 2),
(34551703, 'usserBeSa34', 'pass0016', 95, 'beatrizsanchez@gmail.com', 2),
(34558659, 'usserClCo34', 'pass0017', 67, 'claracortes@gmail.com', 2),
(34564081, 'usserGlSo34', 'pass0031', 22, 'gloriasolano@gmail.com', 1),
(34570500, 'usserMoQu34', 'pass0042', 99, 'monicaquina@gmail.com', 1),
(41573309, 'usserMaLu41', 'pass0024', 82, 'marialugo@gmail.com', 1),
(41640024, 'usserIsRe41', 'pass0039', 36, 'isabelrealpe@gmail.com', 1),
(41733718, 'AliYunior', 'pass0008', 26, 'vejaranoalvarez@gmail.com', 2),
(42870562, 'Egly', 'pass0002', 50, 'lopezagudelo@gmail.com', 2),
(45766496, 'usserMaLo45', 'pass0033', 81, 'marthalobato@gmail.com', 2),
(48600072, 'usserSaCo48', 'pass0023', 19, 'sandracollazos@gmail.com', 1),
(53170834, 'Fais', 'pass0001', 37, 'joseceron@gmail.com', 2, '1'),
(75076432, 'Hohn', 'pass0003', 48, 'garciaaguirre@gmail.com', 2),
(76288230, 'Abeneiber', 'pass0005', 26, 'fernandezalegria@gmail.com', 1),
(76306105, 'usserHeEs76', 'pass0015', 61, 'henryescobar@gmail.com', 2),
(76317155, 'Alfer Wali', 'pass0006', 39, 'velasquezalegria@gmail.com', 1),
(76324843, 'usserHuCe76', 'pass0018', 57, 'hugoceron@gmail.com', 1),
(87246681, 'usserHePa87', 'pass0029', 32, 'hectorpalacios@gmail.com', 2);


-- Estructura de tabla para la tabla `detalle_promotor`
--
DROP TABLE IF EXISTS `detalle_promotor`;
CREATE TABLE `detalle_promotor` (
  `id_promotor` INT PRIMARY KEY,
  `razonsocial` varchar(30) CHARACTER SET utf8 DEFAULT NULL);

--
-- Indice de la tabla `detalle_promotor`
--
  ALTER TABLE `detalle_promotor`
	ADD CONSTRAINT `fk_id_promotor` FOREIGN KEY (`id_promotor`) REFERENCES `perfil`(`id_perfil`);
--
-- Volcado de datos para la tabla `detalle_promotor`
--
INSERT INTO `detalle_promotor` (`id_promotor`, `razonsocial`) VALUES
(263364,'juegos y espectaculos S.A.S'),
(10295280,'asesores y programas'),
(10525832,'Gerardo Ceron C.I.A'),
(10527966,'Calibre da Liberdade'),
(10529900,'DevTernity'),
(10533156, 'Gringo Tuesdays'),
(10537683, 'logistica music s.a.s'),
(10548116, 'Bomberos dance S.A'),
(12976097, 'espacios media torta LTDA'),
(18125465, 'andamosOrganized'),
(31213007, 'parques inflables S.A'),
(34537236, 'prisma Gestion'),
(34538776, 'latino Show music Club'),
(34564081, 'recuerdos de antanio'),
(34570500, 'alimentos express'),
(41573309, 'estructuras y andamios'),
(41640024, 'Entretenimientos Infantiles'),
(48600072, 'produccion y videos'),
(53170834, 'Universidad de la sabana'),
(76288230, 'Luces, musica y farra LTDA'),
(76317155, 'buffets elegantes C.I.A'),
(76324843, 'falandodelas'),
(87246681, 'Teatro Villa Mayor');

--
-- Estructura de tabla para la tabla `eventos`
DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id_eventos` varchar(10) NOT NULL,
  `id_promotor` int(11) NOT NULL,
  `nombre evento` varchar(80) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(800) CHARACTER SET utf8 NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `modalidad` varchar(30) NOT NULL,
  `medio transmision` varchar(30) DEFAULT NULL,
  `enlace conexion` varchar(50) DEFAULT NULL,
  `presentador` varchar(50) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha inicio` date NOT NULL,
  `hora inicio` varchar(5) NOT NULL,
  `fecha fin` date NOT NULL,
  `hora fin` varchar(5) NOT NULL,
  `pago/libre` varchar(30) NOT NULL CHECK(`pago/libre` = 'Pago' OR `pago/libre`='Libre'),
  `costo boleta` float(53,0) NOT NULL,
  `aforo` int(11) NOT NULL,
  `total vendidos` int(11) NOT NULL,
  `plazas disponibles` int(11) NOT NULL,
  `ubicacion` varchar(2) DEFAULT NULL,
  `id_categoria_ev` varchar(10) NOT NULL,
  `estado` varchar(10) NOT NULL CHECK(`estado` = 'Disponible' OR `estado`='Agotado'),
  `img` longblob DEFAULT NULL
   );
-- Indice de la tabla `usuarios`
-- llave foranea de la tabla `usuarios`
--
ALTER TABLE `eventos`
ADD PRIMARY KEY(`id_eventos`),
ADD CONSTRAINT `fk_id_categoria_ev` FOREIGN KEY (`id_categoria_ev`) REFERENCES `categorias_eventos` (`id_categoria_ev`),
ADD CONSTRAINT `fk_id_promotor` FOREIGN KEY (`id_promotor`) REFERENCES `usuarios` (`id_usuario`);
--
-- Volcado de datos para la tabla `eventos`
--
INSERT INTO `eventos` (`id_eventos`, `id_promotor`, `nombre evento`, `descripcion`, `lugar`, `modalidad`, `medio transmision`, `enlace conexion`, `presentador`, `direccion`, `fecha inicio`, `hora inicio`, `fecha fin`, `hora fin`, `pago/libre`, `costo boleta`, `aforo`, `total vendidos`, `plazas disponibles`, `ubicacion`, `id_categoria_ev`, `estado`, `img`) VALUES
('EVPR3345', 34538776, 'Future at EPAM', 'EPAM is a leading global provider of digital platform engineering and development services with 58,000+ employees present in 40+ countries across the globe.', 'Bogota', 'Presencial', '', '', 'grupo niche', 'Carrera  21 # 17 -63', '2022-03-27', '07:00', '2022-03-29', '11:00', 'Pago', 6248, 230, 25, 205, '', 'CTG0007', 'Disponible', 0x32333430392e696d67),
('EVPR3346', 34538776, 'LATINO MUSIC CONFERENCE & AWARDS - 2022', 'Latino Music Group reunirá a los más importantes sellos disqueros, artistas, medios de comunicación, publicistas, managers, plataformas digitales y empresarios del SHOWBUSINESS en la 12a edición de Latino Music Conference, la convención anual de la industria de la música latina de COLOMBIA que llega, con su TOUR 2022 con el cual estará presente en mas de 10 ciudades de Colombia y en el mercado internacional. Este año la convención presentará paneles con 10 conferencias congregando a más de 1200 personalidades destacadas de la industria de la música de Colombia y del mercado U.S Latín quienes estarán presentes en este gran evento de NETWORKING. LATINO MUSIC es una plataforma de NETWORKING y promoción para artistas en Colombia, que congrega a todos las diferentes personalidades de la indu', 'Bogota', 'Presencial', '','', 'fruko & sus tesos', 'Carrera 42 # 54-77 Barrio El Recreo', '2022-04-12', '12:30', '2022-04-13', '15:00', 'Pago', 5746, 120, 47, 73, '', 'CTG0001', 'Agotado', 0x32333436392e696d67),
('EVPR3348', 76324843, 'ExpoEstudios Bogota 2022', '¡Únase a nosotros para disfrutar de ideas, la comunidad y quizás lo más importante, cómo ayudarnos a acelerar nuestros negocios! Ven y escucha a los dueños de negocios y aprende cómo superar los desafíos de crecimiento. Cada mes fomentamos #GiveFirst #DarPrimero en Bogotá y brindamos una plataforma para que la próxima generación de dueños de negocio compartan su sabiduría colectiva para acelerar nuestro éxito comercial.', 'Bogota', 'Presencial', '', '', 'emmanuel danann', 'Calle 100 # 11B-27 Bogotá', '2022-04-19', '09:30', '2022-04-21', '14:00', 'Pago', 6429, 100, 26, 74, '', 'CTG0002', 'Disponible', 0x32333430372e696d67),
('EVPR3349', 53170834, 'Startup Huddle Bogota', 'If only people would give meditation a real try, theyd experience directly for themselves how its an absolute game-changer in life and in career. After all, many of the most successful people on the planet, from athletes to CEOs, meditate regularly. Then, there are all of the MRI studies that show how the brain becomes neuro-plastic, which means it physically changes ', 'Cartagena', 'Presencial', '', '', 'nicolas marquez', 'carrera 8 #15ª-19, Santo Domingo', '2022-05-15', '17:00', '2022-05-17', '15:00', 'Pago', 2206, 90, 78, 12, '', 'CTG0006', 'Disponible', 0x326a3430392e696d67),
('EVPR3350', 53170834, 'Pranayama Free Weekly Class', 'DevTernity is the top international software developer conference. Turning developers into architects and engineering leaders since 2015.', 'Cartagena', 'Presencial', '', '', 'El propio', 'Calle 25 # 6-08 los martires', '2022-05-16', '17:00', '2022-05-18', '16:00', 'Pago', 7187, 290, 141, 149, '', 'CTG0007', 'Disponible', 0x32337830392e696d67),
('EVPR3351', 87246681, 'DevTernity Conference – Are You In', 'Ganador del Reallity de televisión Shark Tank Colombia del canal Sony Latinoamérica en el 2018. Alumni Sabana. Administrador de Empresas y Músico, Especialista en Finanzas y mercado de capitales y Especialista en Gerencia de empresas de la industria de la música. Master en Creación y Dirección de empresas de la Universidad de Nebrija, España. Con experiencia de 7 años como corredor de bolsa certificado por la BVC y desde el año 2013 fundador y director de la empresa MUYSK SAS con la que se han obtenido diversos reconocimientos públicos y privados en emprendimiento e innovación. Desde 2015 comparte sus experiencias como docente de pregrado y posgrado, consultor y conferencista en Emprendimiento, Gerencia estratégica, Finanzas, Creatividad, Innovación, Liderazgo y Gestión Cultural.', 'Barranquilla', 'Presencial', '', '', 'Fabian Villarreal', 'cll 23 esquina # 24 -35', '2022-05-17', '14:00', '2022-05-19', '17:00', 'Libre', 0, 300, 100, 200, '', 'CTG0002', 'Disponible', 0x32303430392e696d67),
('EVVR3347', 87246681, 'Historias de Emprendimiento', 'Sabemos lo que estás pensando ahora, sí, quieres vivir fuera del país, viajar, conocer personas nuevas, salir de la rutina y tener una experiencia llena de aprendizajes y retos. Desde hace mucho tiempo te ronda un pensamiento en la cabeza: ¿cómo puedo hacerlo?, ¿por dónde comienzo?, ¿cómo lo voy a lograr?¡No estás sol@! Llegó el evento en donde descubrirás las respuestas a esas preguntas, donde encontrarás todo en un solo lugar y en el que conocerás un equipo en quien confiar para hacer tu sueño realidad: ¡Viajar, vivir y estudiar en el exterior!', 'Bogota', 'virtual', 'zoom', 'https://conect.zoom.us//SIP/H.323', 'agustin laje', '', '2022-04-02', '10:00', '2022-04-02', '13:00', 'Libre', 0, 150, 126, 24, '', 'CTG0009', 'Disponible', 0x32333472392e696d67);
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `proveedordeservicios`
--
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  idofertaservicio INT,
  idproveedor int(11) NOT NULL,
  id_categorias_servicio INT NOT NULL,
  descripcion varchar(200) NOT NULL,
  imagen longblob DEFAULT NULL
);
--
-- Indice de la tabla `proveedordeservicios`
-- llave(s) foranea(s) de la tabla `proveedordeservicios`
--
ALTER TABLE `servicios`
MODIFY `idofertaservicio` INT PRIMARY KEY AUTO_INCREMENT,
ADD CONSTRAINT `fk_idproveedor` FOREIGN KEY (`idproveedor`) REFERENCES `usuarios` (`id_usuario`),
ADD CONSTRAINT `fk_id_categorias_servicio` FOREIGN KEY (`id_categorias_servicio`) REFERENCES `categorias_servicios` (`id_categorias_servicio`);
--
-- Volcado de datos para la tabla `proveedordeservicios`
--
INSERT INTO `servicios` (`idproveedor`, `id_categorias_servicio`, `descripcion`, `imagen`) VALUES
(10295280,1, 'Animate por asesores y programas, somos lo mejor en Alquiler de logistica, programacion de actividades y mucho mas!!!', ''),
(10525832,2, 'Animate por Gerardo Ceron C.I.A, somos lo mejor en Alquiler de tarimas separadores, estructuras y mucho mas!!!', ''),
(10533156,11, 'Animate por Gringo Tuesdays, somos lo mejor en Servicios de minitecas y mucho mas!!!', ''),
(10537683,1, 'Animate por logistica music s.a.s, somos lo mejor en Alquiler de logistica, programacion de actividades y mucho mas!!!', ''),
(10537683,12, 'Animate por logistica music s.a.s, somos lo mejor en Servicios de DJ y mucho mas!!!', ''),
(10548116,1, 'Animate por Bomberos dance S.A, somos lo mejor en Alquiler de logistica, programacion de actividades y mucho mas!!!', ''),
(12976097,6, 'Animate por espacios media torta LTDA, somos lo mejor en Alquiler de espacios y mucho mas!!!', ''),
(18125465,1, 'Animate por andamosOrganized, somos lo mejor en Alquiler de logistica, programacion de actividades y mucho mas!!!', ''),
(18125465,2, 'Animate por andamosOrganized, somos lo mejor en Alquiler de tarimas separadores  y estructuras y mucho mas!!!', ''),
(263364,13, 'Animate por juegos y espectaculos S.A.S, somos lo mejor en Alquiler de Instalacion de equipos musicales, soniod  y/o video y mucho mas!!!', ''),
(263364,9, 'Animate por juegos y espectaculos S.A.S, somos lo mejor en Servicios de entretenimiento infantil payasos y mimos y mucho mas!!!', ''),
(263364,10, 'Animate por juegos y espectaculos S.A.S, somos lo mejor en Servicios de coreografias y mucho mas!!!', ''),
(263364,12, 'Animate por juegos y espectaculos S.A.S, somos lo mejor en Servicios de DJ y mucho mas!!!', ''),
(31213007,4, 'Animate por parques inflables S.A, somos lo mejor en Alquiler de juegos inflables y mucho mas!!!', ''),
(31213007,5, 'Animate por parques inflables S.A, somos lo mejor en Alquiler de piscinas portatiles para parques y mucho mas!!!', ''),
(34537236,1, 'Animate por prisma Gestion, somos lo mejor en Alquiler de logistica, programacion de actividades y mucho mas!!!', ''),
(34564081,11, 'Animate por recuerdos de antanio, somos lo mejor en Servicios de minitecas y mucho mas!!!', ''),
(34570500,3, 'Animate por alimentos express, somos lo mejor en Alquiler de espacios y mucho mas!!!', ''),
(34570500,7, 'Animate por alimentos express, somos lo mejor en Servicios de decoracion y mucho mas!!!', ''),
(41573309,13, 'Animate por estructuras y andamios, somos lo mejor en Alquiler de Instalacion de equipos musicales, soniod  y/o video y mucho mas!!!', ''),
(41573309,2, 'Animate por estructuras y andamios, somos lo mejor en Alquiler de tarimas separadores  y estructuras y mucho mas!!!', ''),
(41573309,12, 'Animate por estructuras y andamios, somos lo mejor en Servicios de DJ y mucho mas!!!', ''),
(41640024,8, 'Animate por Entretenimientos Infantiles, somos lo mejor en Servicios de entretenimiento infantil titeres y mucho mas!!!', ''),
(41640024,9, 'Animate por Entretenimientos Infantiles, somos lo mejor en Servicios de entretenimiento infantil payasos y mimos y mucho mas!!!', ''),
(48600072,13, 'Animate por produccion y videos, somos lo mejor en Alquiler de Instalacion de equipos musicales, soniod  y/o video y mucho mas!!!', ''),
(76288230,2, 'Animate por Luces, musica y farra LTDA, somos lo mejor en Alquiler de tarimas separadores  y estructuras y mucho mas!!!', ''),
(76288230,11, 'Animate por Luces, musica y farra LTDA, somos lo mejor en Servicios de minitecas y mucho mas!!!', ''),
(76288230,12, 'Animate por Luces, musica y farra LTDA, somos lo mejor en Servicios de DJ y mucho mas!!!', ''),
(76317155,3, 'Animate por buffets elegantes C.I.A, somos lo mejor en Alquiler de espacios y mucho mas!!!', ''),
(76317155,3, 'Animate por buffets elegantes C.I.A, somos lo mejor en Servicios de bufett y/o alimentos y mucho mas!!!', ''),
(76324843,11, 'Animate por falandodelas, somos lo mejor en Servicios de minitecas y mucho mas!!!', '');
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `seguimiento`
--
DROP TABLE IF EXISTS `seguimiento`;
CREATE TABLE `seguimiento` (
  `idseguimiento` int(11),
  `seguido` int(11) NOT NULL,
  `seguidor` int(11) NOT NULL
  );
--
-- Indice de la tabla `seguimiento`
-- llave(s) foranea(s) de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
MODIFY `idseguimiento` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
ADD CONSTRAINT `fk_seguido` FOREIGN KEY (`seguido`) REFERENCES `usuarios` (`id_usuario`),
ADD CONSTRAINT `fk_seguidor` FOREIGN KEY (`seguidor`) REFERENCES `usuarios` (`id_usuario`);
--
-- Volcado de datos para la tabla `seguimiento`
--
INSERT INTO `seguimiento` (`seguido`, `seguidor`) VALUES
(53170834, 10533156),
(53170834, 87246681),
(53170834, 41733718),
(53170834, 34564081),
(53170834, 10548116),
(53170834, 45766496),
(53170834, 10541455),
(53170834, 6760943),
(53170834, 42870562),
(34538776, 42870562),
(34538776, 75076432),
(34538776, 12976097),
(34538776, 76288230),
(34538776, 76317155),
(34538776, 10536636),
(34538776, 41733718),
(34538776, 6760943),
(34538776, 10545657),
(34538776, 10529900),
(34538776, 10527966),
(76324843, 41573309),
(76324843, 10548116),
(76324843, 16738295),
(76324843, 10529900),
(76324843, 10295280),
(76324843, 42870562),
(87246681, 4611335),
(87246681, 41640024),
(87246681, 10295280),
(87246681, 42870562),
(87246681, 41573309),
(87246681, 263364),
(87246681, 34537236),
(87246681, 10533156),
(34570500, 42870562);
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `comprastickets`

DROP TABLE IF EXISTS `comprastickets`;
CREATE TABLE `comprastickets` (
  `idcompras` varchar(10) NOT NULL,
  `idevento` varchar(10) NOT NULL,
  `comprador` int(11) NOT NULL,
  `cant` int(11) DEFAULT NULL
);
--
--
-- Indice de la tabla `comprastickets`
-- llave(s) foranea(s) de la tabla `comprastickets`
--
ALTER TABLE `comprastickets`
ADD PRIMARY KEY (`idcompras`),
ADD CONSTRAINT `fk_comprador` FOREIGN KEY (`comprador`) REFERENCES `usuarios` (`id_usuario`);
--
-- Volcado de datos para la tabla `comprastickets`
--
INSERT INTO `comprastickets` (`idcompras`, `idevento`, `comprador`, `cant`) VALUES
('trans0001', 'EVPR3345', 42870562, 1),
('trans0002', 'EVPR3345', 75076432, 1),
('trans0003', 'EVPR3345', 10537683, 3),
('trans0004', 'EVPR3345', 76288230, 1),
('trans0005', 'EVPR3345', 76317155, 2),
('trans0006', 'EVPR3345', 10536636, 1),
('trans0007', 'EVPR3345', 41733718, 4),
('trans0008', 'EVPR3345', 4613691, 1),
('trans0009', 'EVPR3346', 10545657, 1),
('trans0010', 'EVPR3346', 10529900, 1),
('trans0011', 'EVPR3346', 10527966, 3),
('trans0012', 'EVVR3347', 10533149, 1),
('trans0013', 'EVVR3347', 18125465, 2),
('trans0014', 'EVVR3347', 10541455, 1),
('trans0015', 'EVVR3347', 48600072, 1),
('trans0016', 'EVPR3348', 41573309, 1),
('trans0017', 'EVPR3348', 31213007, 3),
('trans0018', 'EVPR3348', 16738295, 1),
('trans0019', 'EVPR3348', 6760943, 1),
('trans0020', 'EVPR3349', 10533156, 1),
('trans0021', 'EVPR3349', 87246681, 1),
('trans0022', 'EVPR3349', 12976097, 1),
('trans0023', 'EVPR3349', 34564081, 2),
('trans0024', 'EVPR3349', 10548116, 1),
('trans0025', 'EVPR3349', 45766496, 1),
('trans0026', 'EVPR3350', 31946378, 2),
('trans0027', 'EVPR3350', 10545987, 1),
('trans0028', 'EVPR3350', 34531233, 1),
('trans0029', 'EVPR3350', 10525832, 1),
('trans0030', 'EVPR3351', 4611335, 1),
('trans0031', 'EVPR3351', 41640024, 1),
('trans0032', 'EVPR3351', 10295280, 3),
('trans0033', 'EVPR3351', 34537236, 1),
('trans0034', 'EVPR3351', 34570500, 2);
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `qrasistencia`
--
DROP TABLE IF EXISTS `qrasistencia`;
CREATE TABLE `qrasistencia` (
  `idqr` varchar(10) NOT NULL,
  `transaccion` varchar(10) NOT NULL,
  `qr` varchar(10) NOT NULL,
  `asistencia` char(1) NOT NULL
);
--
--
-- Indice de la tabla `qrasistencia`
-- llave(s) foranea(s) de la tabla `qrasistencia`
--
ALTER TABLE `qrasistencia`
ADD PRIMARY KEY (`idqr`),
ADD CONSTRAINT `fk_transaccion` FOREIGN KEY (`transaccion`) REFERENCES `comprastickets` (`idcompras`);
--
-- Volcado de datos para la tabla `qrasistencia`
--
INSERT INTO `qrasistencia` (`idqr`, `transaccion`, `qr`, `asistencia`) VALUES
('QR001', 'trans0001', 'QR001.SVG', '1'),
('QR002', 'trans0002', 'QR002.SVG', '0'),
('QR003', 'trans0003', 'QR003.SVG', '*'),
('QR004', 'trans0003', 'QR004.SVG', '*'),
('QR005', 'trans0003', 'QR005.SVG', '0'),
('QR006', 'trans0004', 'QR006.SVG', '*'),
('QR007', 'trans0005', 'QR007.SVG', '*'),
('QR008', 'trans0005', 'QR008.SVG', '0'),
('QR009', 'trans0006', 'QR009.SVG', '1'),
('QR010', 'trans0007', 'QR010.SVG', '1'),
('QR011', 'trans0007', 'QR011.SVG', '0'),
('QR012', 'trans0007', 'QR012.SVG', '0'),
('QR013', 'trans0007', 'QR013.SVG', '1'),
('QR014', 'trans0008', 'QR014.SVG', '1'),
('QR015', 'trans0009', 'QR015.SVG', '1'),
('QR016', 'trans0010', 'QR016.SVG', '*'),
('QR017', 'trans0011', 'QR017.SVG', '0'),
('QR018', 'trans0011', 'QR018.SVG', '1'),
('QR019', 'trans0011', 'QR019.SVG', '0'),
('QR020', 'trans0012', 'QR020.SVG', '0'),
('QR021', 'trans0013', 'QR021.SVG', '*'),
('QR022', 'trans0013', 'QR022.SVG', '1'),
('QR023', 'trans0014', 'QR023.SVG', '0'),
('QR024', 'trans0015', 'QR024.SVG', '1'),
('QR025', 'trans0016', 'QR025.SVG', '0'),
('QR026', 'trans0017', 'QR026.SVG', '0'),
('QR027', 'trans0017', 'QR027.SVG', '*'),
('QR028', 'trans0017', 'QR028.SVG', '1'),
('QR029', 'trans0018', 'QR029.SVG', '1'),
('QR030', 'trans0019', 'QR030.SVG', '0'),
('QR031', 'trans0020', 'QR031.SVG', '1'),
('QR032', 'trans0021', 'QR032.SVG', '0'),
('QR033', 'trans0022', 'QR033.SVG', '1'),
('QR034', 'trans0023', 'QR034.SVG', '0'),
('QR035', 'trans0023', 'QR035.SVG', '1'),
('QR036', 'trans0024', 'QR036.SVG', '0'),
('QR037', 'trans0025', 'QR037.SVG', '0'),
('QR038', 'trans0026', 'QR038.SVG', '1'),
('QR039', 'trans0026', 'QR039.SVG', '*'),
('QR040', 'trans0027', 'QR040.SVG', '0'),
('QR041', 'trans0028', 'QR041.SVG', '0'),
('QR042', 'trans0029', 'QR042.SVG', '1'),
('QR043', 'trans0030', 'QR043.SVG', '1'),
('QR044', 'trans0031', 'QR044.SVG', '0'),
('QR045', 'trans0032', 'QR045.SVG', '0'),
('QR046', 'trans0032', 'QR046.SVG', '1'),
('QR047', 'trans0032', 'QR047.SVG', '0'),
('QR048', 'trans0033', 'QR048.SVG', '0'),
('QR049', 'trans0034', 'QR049.SVG', '*'),
('QR050', 'trans0034', 'QR050.SVG', '*');
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `interacciones`
--
DROP TABLE IF EXISTS `interacciones`;
CREATE TABLE `interacciones` (
  `idinteraccion` varchar(10) NOT NULL,
  `qrasistente` varchar(10) NOT NULL,
  `likedisl` char(1) DEFAULT NULL,
  `comentarios` varchar(500) DEFAULT NULL,
  `compartidos` int(11) DEFAULT NULL
);
--
-- Indice de la tabla `interacciones`
-- llave(s) foranea(s) de la tabla `interacciones`
--
ALTER TABLE `interacciones`
ADD PRIMARY KEY (`idinteraccion`),
ADD CONSTRAINT `fk_qrasistente` FOREIGN KEY (`qrasistente`) REFERENCES `qrasistencia` (`idqr`);
--
--
-- Volcado de datos para la tabla `interacciones`
--
INSERT INTO `interacciones` (`idinteraccion`, `qrasistente`, `likedisl`, `comentarios`, `compartidos`) VALUES
('INT001', 'QR001', '1', 'estuvo muy didactico y educativo', 3),
('INT002', 'QR009', '1', 'interesante la ponencia', 4),
('INT003', 'QR010', '0', 'Lenguaje demasiado tecnico, fue mucho para mi', NULL),
('INT004', 'QR013', '0', 'Muchos problemas con el audio', NULL),
('INT005', 'QR014', '1', 'expositor muy bien preparado', 7),
('INT006', 'QR015', '1', 'estuvo una chimba', 23),
('INT007', 'QR018', '1', 'el concierto estuvo de lo mejorcito', 56),
('INT008', 'QR022', '1', 'puede ser mucho más ágil la entrada al complejo implementando diligentemente tecnologías de punta', 3),
('INT009', 'QR024', '1', 'Zona conocida, concurrida e importante', 4),
('INT010', 'QR027', '0', '', NULL),
('INT011', 'QR028', '0', '', NULL),
('INT012', 'QR029', '0', 'deben mejorar o ampliar los parqueaderos cercanos y vías de acceso.', NULL),
('INT013', 'QR031', '1', 'Buen servicio, aunque había mucha fila fue rápido el ingreso', 5),
('INT014', 'QR033', '1', 'cuenta con 8 pabellones de gran capacidad', NULL),
('INT015', 'QR035', '1', 'Las áreas bastante limpias y bien organizado.', NULL),
('INT016', 'QR038', '0', 'cobren tanto dinero por entrar', NULL),
('INT017', 'QR042', '0', 'habían muchas personas y muy poca logística para la organización', NULL),
('INT018', 'QR043', NULL, 'exelente', 1),
('INT019', 'QR046', NULL, 'muy bueno', 2);