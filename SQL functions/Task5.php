<?php
/* Написать запросы на:

1) Создание базы данных

2) Удаление базы данных

3) Создание таблицы users c такими полями

    id - целое число, первичный ключ, автоинкримент

    name - строка длинной 35 (может быть пустым)

    surname  - строка длинной 35 (может быть пустым)

    email - строка длинной 60 (не может быть пустым)

    password - строка длинной 100 (не может быть пустым)

    age - целое число (может быть пустым)

    is_active - целое число (не может быть пустым)

    is_admin - целое число (не может быть пустым)

4) Очистка таблицы users

5) Полное удаление таблицы users

6) Написать SQL на 4 CRUD операции в таблице users */

/*  1) CREATE DATABASE `homework` COLLATE 'utf8_general_ci';
    2) CREATE DATABASE `homework` COLLATE 'utf8_general_ci';
    3) CREATE TABLE `users` (
          `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `name` varchar(35) COLLATE 'utf8_general_ci' NULL,
          `surname` varchar(35) COLLATE 'utf8_general_ci' NULL,
          `email` varchar(60) COLLATE 'utf8_general_ci' NOT NULL,
          `password` varchar(100) COLLATE 'utf8_general_ci' NOT NULL,
          `age` int NULL,
          `is_active` int NOT NULL,
          `is_admin` int NOT NULL
        ) COLLATE 'utf8_general_ci';
    4) DELETE FROM users;
    5) DROP TABLE users;
    6) C INSERT INTO `users` (`name`, `surname`, `email`, `password`, `age`, `is_active`, `is_admin`)
         VALUES ('Igor', 'Pavliuk', 'igorxsky@gmail.com', md5('xxx'), NULL, '1', '1');
       R SELECT name, surname FROM users;
       U UPDATE `users` SET
            `id` = '4'
         WHERE `id` = '1';
       D DELETE FROM users;
*/
