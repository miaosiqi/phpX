<?php
    function C($name, $method){
        require_once($name.'Controller.php');
        $controller = $name.'Controller';
        $obj = new $controller;
        $obj -> $method();
    }

    function connectToDb(){
        $servername = "localhost";
        $username = "root";
        $password = "xsign888";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=phpX", $username, $password);
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
//
//                $conn->exec($sql);


        } catch(PDOException $e) {

            die($e->getMessage());
        }
        return $pdo;
    }

    function fetchGuests($pdo){
        $statement = $pdo -> prepare("select * from myguests");
        $statement -> execute();
        $guests = $statement->fetchall(PDO::FETCH_CLASS, 'Guests');
        return $guests;

    }
?>