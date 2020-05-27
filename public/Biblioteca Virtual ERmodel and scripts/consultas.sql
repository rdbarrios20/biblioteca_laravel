
-- Este es el script para poblar la BD con datos de prueba

INSERT INTO `biblioteca`.`estados`
(`id_estado`,
`nombre`)
VALUES
(01,
'Disponible'),
(02,'Agotado');

INSERT INTO `biblioteca`.`categorias`
(`id_categoria`,
`nombre`)
VALUES
(1,
'Romanticos'),
(2,'Ficcion'),
(3,'Familia');

INSERT INTO `biblioteca`.`personas`
(`identificacion`,
`tipo_id`,
`nombres`,
`apellidos`,
`direccion`,
`telefono`,
`email`)
VALUES
('1000000001',
'CC',
'root',
'',
'',
'',
'rdbarrios20@gmail.com'),
('1065632580',
'CC',
'Rafael David',
'Barrios Arias',
'Cll 17# 32-80',
'3004158084',
'rdbarrios@gmail.com');



USE biblioteca;
SELECT `roles`.`id_rol`,
    `roles`.`nombre`
FROM `biblioteca`.`roles`;


USE biblioteca;
SELECT `estados`.`id_estado`,
    `estados`.`nombre`
FROM `biblioteca`.`estados`;


USE biblioteca;
SELECT `categorias`.`id_categoria`,
    `categorias`.`nombre`
FROM `biblioteca`.`categorias`;

SELECT `personas`.`identificacion`,
    `personas`.`tipo_id`,
    `personas`.`nombres`,
    `personas`.`apellidos`,
    `personas`.`direccion`,
    `personas`.`telefono`,
    `personas`.`email`
FROM `biblioteca`.`personas`;

DELETE FROM `biblioteca`.`personas`
WHERE identificacion='1000000001';


