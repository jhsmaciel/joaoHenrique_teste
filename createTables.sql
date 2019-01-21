-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Motorista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Motorista` (
  `idMotorista` INT NOT NULL AUTO_INCREMENT,
  `nomeMotorista` VARCHAR(50) NOT NULL,
  `modeloCarro` VARCHAR(50) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `status` TINYINT NOT NULL,
  `sexo` VARCHAR(10) NULL,
  `cpfMotorista` BIGINT(11) NOT NULL,
  PRIMARY KEY (`idMotorista`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Passageiro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Passageiro` (
  `idPassageiro` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomePassageiro` VARCHAR(50) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `sexo` VARCHAR(10) NULL,
  `cpfMotorista` BIGINT(11) NOT NULL,
  PRIMARY KEY (`idPassageiro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Corrida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Corrida` (
  `idCorrida` INT UNSIGNED NULL AUTO_INCREMENT,
  `idMotorista` INT UNSIGNED NOT NULL,
  `idPassageiro` INT UNSIGNED NOT NULL,
  `valor` REAL UNSIGNED NOT NULL,
  PRIMARY KEY (`idCorrida`),
  CONSTRAINT `idMotorista`
    FOREIGN KEY (`idMotorista`)
    REFERENCES `mydb`.`Motorista` (`idMotorista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idPassageiro`
    FOREIGN KEY (`idPassageiro`)
    REFERENCES `mydb`.`Passageiro` (`idPassageiro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
