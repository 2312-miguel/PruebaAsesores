CREATE TABLE `advisers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `genero` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `sede` varchar(100) NOT NULL,
  `usuario_quien_registra` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `clave` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO asesor.users (id, usuario, clave, estado) VALUES(1, 'comunicaciones', '$2y$12$cpwNfnp/On0cYUvSQT0yqOEvrM/hRsFExJQxMlhSCpYxrr0gR0nbO', 'activo');
INSERT INTO asesor.users (id, usuario, clave, estado) VALUES(2, 'gestión', '$2y$12$qz6qC47l0myTjqGPSWmjcuBIdfsFK/srDb11O9aJsKCMYW.9rcl/q', 'activo');
