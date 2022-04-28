<?php
    $dsn = 'mysql:host=localhost;dbname=ucl';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('..\app\includes\databaseerror.php');
        exit();
    }
?>