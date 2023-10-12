<?php

    require_once './private/path.php';
    include './private/db/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CMS</title>
</head>

<body class="body">
    <section class="cms">
        <form class="cms__form" method="POST" action="../private/shared/data.php">
            <figure class="cms__form--img"></figure>
            <div class="cms__form--wrapper">
                <input type="text" class="cms__form--inputs" name="subject" id="subject" placeholder="Subject" require>
                <input type="date" class="cms__form--inputs" name="date" id="date" placeholder="Date" require>
                <textarea class="cms__form--textarea" name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Text" require></textarea>
                <input class="cms__form--submitBtn" type="submit" value="submit" name="submitBtn">
            </div>
        </form>
    </section>
</body>

</html>