
CREATE DATABASE 'terramar';

USE 'terramar';

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `proceso_pedido` enum('Cocinando','Preparando','Preparado') COLLATE latin1_spanish_ci NOT NULL,
  `fechapedido` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_plato`, `id_usuarios`, `proceso_pedido`, `fechapedido`) VALUES
(12, 7, 3, 'Preparado', '2020-03-03 10:11:41'),
(13, 7, 3, 'Preparando', '2020-04-21 10:44:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id_plato` int(11) NOT NULL,
  `nom_plato` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tiempo_preparacion` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `preparacion` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `ruta` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id_plato`, `nom_plato`, `tiempo_preparacion`, `preparacion`, `precio`, `ruta`, `descripcion`) VALUES
(7, 'Arroz de Coco', '15 ', '   - 2 cocos  - 3 tazas de arroz  - 1 taza de uvas pasas  - 3 cucharadas de azucar  - Sal al gusto  - 7 tazas de agua incluyendo el agua de los cocos   Preparacion  1. Saca el agua por los orificios que tiene el coco y guardarla aparte. Luego coloca directamente los cocos al fuego para partir mas facil la cascara. Una vez hayas partido el coco y con la ayuda de un cuchillo, retira la pulpa y cortala en cuadros. 2. Licua toda la pulpa con el agua del coco y dos tazas de agua, hasta que quede lo mas liquido posible. Pasa por el colador y preserva esa leche. 3. Pon la leche de coco en un caldero y lleva al fuego. Deja hervir hasta que el liquido se consuma totalmente y se dore sin dejar quemar.  4. Con las otras cinco tazas de agua vuelve a licuar la pulpa que que habias reservado y cuelala. Agrega esta segunda mezcla al caldero donde esta el melao de coco para que se cocine con la sal y el azucar.  5. Incorpora el arroz previamente lavado. Prueba la sal, el azucar y mezcla constantemente para evitar que se pegue.  6. Cuando ya este seco, agrega las uvas pasas y tapa lo mas hermetico posible.  Reduce el fuego y termina la coccion como un arroz blanco tradicional.', 700, 'images/arroz-de-coco.jpg', '   El arroz con coco es un plato tipico de la costa Caribe Colombiana .  Tiene dos formas de prepararse, Arroz Blanco de Coco o Arroz de Coco Negrito .Es una preparacion agridulce que suele estar al lado especialmente al pescado frito y se sirve con patacones y ensalada.Receta:Ingredientes2 cocos2 libras de arroz2 cucharadas de azucar2 cucharaditas de salParta el coco en trozos reducidos, dejandole la parte cafe y licuelo con dos tazas de agua tibia. Cuelelo y exprimalo con la mano hasta que quede casi seco y el agua blanca o leche. Ponga esta leche en un caldero con dos cucharadas azucar morena o panela rallada para el que quede arroz con coco negro, para el blanco se hecha azucar blanca. Dejela hervir hasta que el agua se evapore y quede solo el aceite de coco y unos granitos negros que se llaman titote. Al coco rallado agreguele otras 4 tazas de agua, vuelvalo a exprimir y ponga esa agua donde esta el aceite y el titote, agregandole el arroz y dejelo secar de la manera tradicional echandole el azucar y la sal. Al arroz con coco negro si se desea puede echarle uvas pasas cuando comience a hervir el agua con el arroz. El arroz debe ser de grano grueso , la mejor marca es Pepa.Consejo: Este arroz debe quedar entre sal y dulce.'),
(8, 'Arepa de Huevo', '20 ', '', 7000, 'images/arepa-de-huevo.jpg', 'Es una arepa de huevo rica'),
(11, 'Langosta', '22 ', '', 20000, 'images/langosta.jpg', 'Es una langosta xdxdxd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` mediumint(20) NOT NULL,
  `direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `tipousu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contrasena`, `telefono`, `direccion`, `tipousu`) VALUES
(1, 'Felipe Guzman', 'felo@hola.com', 'olo', 0, 'ffgagragag', 1),
(2, 'David Hoyos', 'david@hola.com', 'olo', 0, 'ththth544', 2),
(3, 'Sebastian Arango', 'sebas@hola.com', 'olo', 0, 'ththth544', 3),
(5, 'Jorge Rios', 'jriosfer@gmail.com', 'jaja', 5976481, 'cra34', 3),
(6, 'juan esteban', 'je@gmail.com', '123', 305, 'cr50', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`,`id_plato`,`id_usuarios`),
  ADD KEY `fk_Platos_has_Pedidos_Platos1_idx` (`id_plato`),
  ADD KEY `fk_platos_has_pedidos_usuarios1_idx` (`id_usuarios`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id_plato`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_Platos_has_Pedidos_Platos1` FOREIGN KEY (`id_plato`) REFERENCES `platos` (`id_plato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_platos_has_pedidos_usuarios1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
