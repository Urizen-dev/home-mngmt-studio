CREATE TABLE `home_mngmt_studio`.`users` (
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(128) NOT NULL,
  `email` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`name`));

CREATE TABLE `home_mngmt_studio`.`announcements` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(64) NOT NULL,
  `body` TEXT NOT NULL,
  `created_at` VARCHAR(45) NOT NULL,
  `owner` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_owner_idx` (`owner` ASC),
  CONSTRAINT `user_owner`
    FOREIGN KEY (`owner`)
    REFERENCES `home_mngmt_studio`.`users` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `home_mngmt_studio`.`gifts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(64) NOT NULL,
  `gift_owner` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `order_date` DATE NULL,
  `order_status` INT NULL,
  `receive_status` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_owner_gift_idx` (`gift_owner` ASC),
  CONSTRAINT `user_owner_gift`
    FOREIGN KEY (`gift_owner`)
    REFERENCES `home_mngmt_studio`.`users` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `home_mngmt_studio`.`tasks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `task_owner` VARCHAR(45) NOT NULL,
  `title` VARCHAR(64) NOT NULL,
  `description` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `end_date` DATE NOT NULL,
  `status` INT NULL,
  `assignee` VARCHAR(45) NULL,
  `priority` INT NULL,
  `closeDate` DATE NULL,
  `flag` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_task_owner_idx` (`task_owner` ASC),
  CONSTRAINT `user_task_owner`
    FOREIGN KEY (`task_owner`)
    REFERENCES `home_mngmt_studio`.`users` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `home_mngmt_studio`.`timetable` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_from` DATE NULL,
  `date_to` DATE NULL,
  `timetable_owner` VARCHAR(45) NOT NULL,
  `status` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_timetable_owner_idx` (`timetable_owner` ASC),
  CONSTRAINT `user_timetable_owner`
    FOREIGN KEY (`timetable_owner`)
    REFERENCES `home_mngmt_studio`.`users` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



