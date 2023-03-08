<?php 

$result = $con->query("CREATE TABLE `sh_sell_by` (`Id` int(20) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`Id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
$result = $con->query("ALTER TABLE  `sh_sell_by` ADD `Status` VARCHAR(255) NOT NULL ;"); //ENUM (style)::  Online / Offline / NewSession
$result = $con->query("ALTER TABLE  `sh_sell_by` ADD `Name` VARCHAR(255) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by` ADD `CoC_nu` VARCHAR(255) NOT NULL ;"); // 

$result = $con->query("CREATE TABLE `sh_sell_by_item` (`Id` int(20) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`Id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `[sh_items_info]Id` INT(20) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `[sh_sell_by]Id` INT(20) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `InterneReferentie` VARCHAR(255) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `Quantity` VARCHAR(255) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `Price` DECIMAL(20,8) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `DeliveryTime` VARCHAR(255) NOT NULL ;"); // 
$result = $con->query("ALTER TABLE  `sh_sell_by_item` ADD `BeforTime` TIME NOT NULL ;"); // 

?>
