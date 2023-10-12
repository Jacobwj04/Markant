<?php

    require_once '../path.php';
    include '../db/connect.php';

    var_dump($_POST["subject"]);
    echo "<br>";
    var_dump($_POST["date"]);
    echo "<br>";
    var_dump($_POST["paragraph"]);

    $subject = $_POST["subject"];
    $date = $_POST["date"];
    $paragraph = $_POST["paragraph"];

    $db->exec("INSERT INTO config (subject, date, paragraph) VALUES ('$subject', '$date', '$paragraph')"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
</body>
</html>