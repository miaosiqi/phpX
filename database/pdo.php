<?php
$servername = "localhost";
$username = "root";
$password = "xsign888";
$firstname = $_POST['name'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpX", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('".$firstname."', 'Doe', 'john@example.com')";
    // 使用 exec() ，没有结果返回
    $conn->exec($sql);
//        echo "新记录插入成功";
}
catch(PDOException $e)
{

    echo $e->getMessage().'我是谁';
}
?>