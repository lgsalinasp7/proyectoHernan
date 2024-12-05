CREATE DATABASE IF NOT EXISTS psicologia;
USE psicologia;

CREATE TABLE IF NOT EXISTS `citas` (
  `cita_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `citas` (`cita_id`, `usuario_id`, `fecha`, `hora`, `estado`) VALUES
(1, 1, '2024-11-10', '09:30:00', 'Confirmada'),
(2, 2, '2024-11-11', '10:00:00', 'Cancelada'),
(3, 3, '2024-11-12', '13:30:00', 'Pendiente'),
(4, 4, '2024-11-13', '08:45:00', 'Confirmada'),
(5, 5, '2024-11-14', '11:15:00', 'Confirmada');

-- Estructura de tabla para la tabla `pagos`
CREATE TABLE `pagos` (
  `pago_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `metodo_pago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcado de datos para la tabla `pagos`
INSERT INTO `pagos` (`pago_id`, `usuario_id`, `monto`, `fecha`, `metodo_pago`) VALUES
(1, 1, '50000.00', '2024-11-01', 'Tarjeta de Crédito'),
(2, 2, '75000.00', '2024-11-02', 'Paypal'),
(3, 3, '60000.00', '2024-11-03', 'Transferencia Bancar'),
(4, 4, '80000.00', '2024-11-04', 'Tarjeta de Débito'),
(5, 5, '45000.00', '2024-11-05', 'Efectivo');