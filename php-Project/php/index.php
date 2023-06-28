<?php
require_once "navigatie.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


<body>

    <div class="hallo">
        <h1> Welkom,  <?php if ($_SESSION["username"]) {
            echo strip_tags( $_SESSION["username"]);
        }
         ?> </h1>







    <section class="tweetForm">


        <form action="tweetsconnect.php" method="post" class="tweetform">


            <h2>   vertel over je dag, tweet hier</h2>
            <input type="text" name="tweet" placeholder="start tweeting .." required>
            <input type="submit" value="Send" onclick="closeForm()" class="finished-tweet" >

        </form>

    </section>


    <div class="borderTweets">  <?php
        require_once "tweetOphalen.php";
        foreach  ($tweets as $tweet) {
            echo strip_tags("<div class='tweet'>"  . $tweet["tweets"] . "</div>", "<div>");
        }
        


?>
 </div>
</body>

</html>


