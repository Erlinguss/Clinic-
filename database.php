<?php
     $dsn = 'mysql:host=localhost;dbname=D00251914';
    $username = 'D00251914';
    $password = 'jQ46eve2';


    // $username = 'root';
    // $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>