![](https://www.tech-recipes.com/wp-content/uploads/2018/10/php-639x350.png)

# :bust_in_silhouette: PHP 7 User Management System

Simple backend system developed with PHP and MySQL using Data Access Object Pattern

## :large_blue_circle: Data Access Object

DAO is a pattern that provides a in-layers application, with a layer wich aims to connect to database and other layer with a abstract interface that communicates with database layer to persist data.

## :red_circle: How to use this backend?

1. First, configure your database (MySQL)
```
CREATE DATABASE daodb;
USE php7dao;
CREATE TABLE users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(64) NOT NULL,
  password VARCHAR(256) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
INSERT INTO users(login, passoword) VALUES('root', 'secret-pass');  # Optional
```
2. In project folder, run: ```composer install```

3. In the [Database](https://github.com/g4br-4d3v/php-dao/blob/master/classes/Database.php) class set **your** localhost configs

4. In the [index.php](https://github.com/g4br-4d3v/php-dao/blob/master/classes/User.php) the **DB operations** are /* commented */
