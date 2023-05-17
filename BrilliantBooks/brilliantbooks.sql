CREATE TABLE `brilliantbookstore`.`tblslideshows` 
(
  `slide_id` INT NOT NULL AUTO_INCREMENT , \
  `image_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
  `title` INT NOT NULL , PRIMARY KEY (`slide_id`)
) 
  ENGINE = InnoDB;