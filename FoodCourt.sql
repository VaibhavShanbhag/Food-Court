CREATE TABLE `food_court`.`customer`(
    `cust_id` INT(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `mobile_number` VARCHAR(10) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `address` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL 
)ENGINE = InnoDB;