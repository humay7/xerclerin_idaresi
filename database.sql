CREATE TABLE `xercler`.`odenis_novu` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;

INSERT INTO `odenis_novu` (`id`, `name`) VALUES ('1', 'medaxil'), ('2', 'mexaric');


CREATE TABLE `xercler`.`valyuta` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(20) NOT NULL , 
    `full_name` VARCHAR(50) NOT NULL , 
    PRIMARY KEY (`id`))
ENGINE = InnoDB;


INSERT INTO `valyuta` (`id`, `name`, `full_name`) VALUES ('1', 'AZN', 'Azerbaycan manati'), ('2', 'EUR', 'Euro'),('3', 'USD', 'ABS Dollari');


CREATE TABLE `xercler`.`odenis` ( 
    `mebleg` INT NOT NULL , 
    `kategoriya` VARCHAR(50) NOT NULL , 
    `valyuta` VARCHAR(20) NOT NULL , 
    `nov` VARCHAR(20) NOT NULL , 
    `rey` VARCHAR(255) NOT NULL,
    INDEX(`kategoriya`),
    INDEX(`valyuta`)


) 
ENGINE = InnoDB;