<?php
    echo 'aa';
    $db_connect = 'mysql:host=localhost; dbname=test; charset=utf8';

    try {
        $pdo = new PDO($db_connect, 'aaa1', 'password');

        $sql = "SELECT * FROM user_testtable;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        print_r($row);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>