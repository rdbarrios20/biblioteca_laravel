-- MySQL Workbench Synchronization
-- Generated: 2020-05-26 00:23
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: ralfh

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE TABLE IF NOT EXISTS `biblioteca`.`libros` (
  `codigo_libro` INT(10) NOT NULL,
  `autor` VARCHAR(20) NOT NULL,
  `nombre_libro` VARCHAR(50) NOT NULL,
  `fecha_expedicion` DATE NULL DEFAULT NULL,
  `disponibilidad` VARCHAR(15) NOT NULL,
  `precio_publico` INT(15) NOT NULL,
  `precio_interno` INT(15) NOT NULL,
  `reservado` TINYINT(4) NOT NULL,
  `cantidad` INT(10) NULL DEFAULT NULL,
  `id_categoria` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`codigo_libro`),
  INDEX `id_categoria_idx` (`id_categoria` ASC) ,
  CONSTRAINT `FK_id_categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `biblioteca`.`categorias` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`categorias` (
  `id_categoria` INT(11) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`personas` (
  `identificacion` VARCHAR(15) NOT NULL,
  `tipo_id` VARCHAR(45) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NULL DEFAULT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`identificacion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`pedidos` (
  `idpedidos` INT(11) NOT NULL,
  `id_cliente` VARCHAR(15) NOT NULL,
  `fecha_pedido` DATE NOT NULL,
  `codigo_libro` INT(10) NOT NULL,
  `cantidad` INT(11) NULL DEFAULT NULL,
  `valor_total` INT(11) NULL DEFAULT NULL,
  `id_estado` INT(11) NOT NULL,
  PRIMARY KEY (`idpedidos`),
  INDEX `idcliente_idx` (`id_cliente` ASC) ,
  INDEX `codigo_libro_idx` (`codigo_libro` ASC) ,
  INDEX `id_estado_idx` (`id_estado` ASC) ,
  CONSTRAINT `FK_idcliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `biblioteca`.`personas` (`identificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_codigo_libro`
    FOREIGN KEY (`codigo_libro`)
    REFERENCES `biblioteca`.`libros` (`codigo_libro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_id_estado`
    FOREIGN KEY (`id_estado`)
    REFERENCES `biblioteca`.`estados` (`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`usuarios` (
  `id_usuario` INT(3) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `identificacion` VARCHAR(15) NOT NULL,
  `id_rol` INT(11) NOT NULL,
  `id_rol_segundario` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `id_rol_idx` (`id_rol` ASC) ,
  INDEX `identificacion_idx` (`identificacion` ASC) ,
  INDEX `id_rol_Segundario_idx` (`id_rol_segundario` ASC) ,
  CONSTRAINT `FK_id_rol`
    FOREIGN KEY (`id_rol`)
    REFERENCES `biblioteca`.`roles` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_identificacion`
    FOREIGN KEY (`identificacion`)
    REFERENCES `biblioteca`.`personas` (`identificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_id_rol_Segundario`
    FOREIGN KEY (`id_rol_segundario`)
    REFERENCES `biblioteca`.`roles` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`bitacoras` (
  `id` INT(11) NOT NULL,
  `idusuario` INT(3) NOT NULL,
  `accion` VARCHAR(15) NOT NULL,
  `fecha` DATE NOT NULL,
  `detalles` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_usuario_idx` (`idusuario` ASC) ,
  CONSTRAINT `FK_id_usuarios`
    FOREIGN KEY (`idusuario`)
    REFERENCES `biblioteca`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`roles` (
  `id_rol` INT(11) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `biblioteca`.`estados` (
  `id_estado` INT(11) NOT NULL,
  `nombre` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_estado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
