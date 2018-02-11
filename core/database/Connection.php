<?php
    class Connection{

        public static function make ($config)
        {
            $servername = "localhost";
            $username = "root";
            $password = "xsign888";

            try {
//                $pdo = new PDO("mysql:host=$servername;dbname=phpX", $username, $password);
                $pdo = new PDO($config['connection'].';dbname='.$config['name'], $config['username'], $config['password']);
                // 设置 PDO 错误模式，用于抛出异常
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//                // 使用 sql 创建数据表
//                $sql = "CREATE TABLE MyGuests (
//                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                firstname VARCHAR(30) NOT NULL,
//                lastname VARCHAR(30) NOT NULL,
//                email VARCHAR(50),
//                reg_date TIMESTAMP
//                )";



            } catch(PDOException $e) {

                die($e->getMessage());
            }
            return $pdo;
        }
    }