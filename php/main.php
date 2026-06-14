<?php
    $db_connect = 'mysql:host=localhost; dbname=test; charset=utf8';
    $input_name = $_POST['name'];
    $input_pass = $_POST['password'];

    $date_time = new DateTime();
    $date_time->setTimezone(new DateTimeZone("Asia/Tokyo"));
    $date_time_format = $date_time->format("Y-m-d H:i"); 

    try {
        $pdo = new PDO($db_connect, 'aaa1', 'password');

        $sql = "SELECT * FROM user_testtable WHERE name = :name AND password = :password;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $input_name, ':password' => $input_pass]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="../style/main.css">
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
    <script>
    </script>
</head>
<body>
    <div class="center"> 
        <?php 
            if ($row) {
                echo 'ログインすることができました。<br>' .$date_time_format;
            }
            else {
                echo 'ログインできませんでした。';
            }
        ?>
    </div>
</body>