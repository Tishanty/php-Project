<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../script/index.js"></script>
</head>


<body>

    <nav class="navSide">
        <ul class="listNav">
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>


            <!--            <li><input type="button" class="ac" value="tweet"-->
            <!--                    onclick=location.href="tweetOphalen.php"></li>-->

            <li><input type="button" class="ac" value="registreer"
                    onclick=location.href="http://localhost/php-project/php/registreer.php"></li>
            <li><input type="button" class="ac" value="Inloggen"
                    onclick=location.href="http://localhost/php-project/php/inlog.php"></li>
        </ul>

    </nav>

</body>

</html>