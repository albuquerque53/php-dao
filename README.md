![](https://www.tech-recipes.com/wp-content/uploads/2018/10/php-639x350.png)

# :bust_in_silhouette: PHP 7 User Management System

Simple backend system developed with PHP and MySQL using Data Access Object Pattern

## :large_blue_circle: Data Access Object

DAO is a pattern that provides a in-layers application, with a layer wich aims to connect to database and other layer with a abstract interface that communicates with database layer to persist data.

## :red_circle: How to use this backend?

1. First, configure your database (MySQL)
```
CREATE DATABASE daodb;
USE daodb;
CREATE TABLE users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(64) NOT NULL,
  password VARCHAR(256) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
INSERT INTO users(login, password) VALUES('root', 'secret-pass');  # Optional
```
2. In project folder, run: ```composer dump-autoload -o```

3. In the [Database](https://github.com/albuquerque53/php-dao/blob/master/classes/DAO/DatabaseConnection.php) class set **your** localhost configs

**API Table**

| Method    | URI         | Name    | Action                                      | Body    |
|-----------|------------ |---------|---------------------------------------------|---------|
| GET       | /           | index   | Access\Controller\ApiController@index       |  none   |
| GET       | user/{id}   | show    | Access\Controller\ApiController@show        |  none   |
| GET       | search/     | search  | Access\Controller\ApiController@search      |  json   |
| POST      | new/        | new     | Access\Controller\ApiController@store       |  json   |
| PUT       | update/{id} | update  | Access\Controller\ApiController@update      |  json   |
| DELETE    | remove/{id} | remove  | Access\Controller\ApiController@destroy     |  none   |
