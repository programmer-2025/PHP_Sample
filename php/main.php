<?php
    $db_connect = 'mysql:host=localhost; dbname=test; charset=utf8';
    $input_name = $_POST['name'];
    $input_pass = $_POST['password'];

    try {
        $pdo = new PDO($db_connect, 'aaa1', 'password');

        $sql = "SELECT * FROM user_testtable WHERE name = :name AND password = :password;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $input_name, ':password' => $input_pass]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo 'ログインすることができました。';
        }
        else {
            echo 'ログインできませんでした。';
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>