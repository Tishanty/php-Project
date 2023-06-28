<?php
require_once "navigatie.php";
require_once "database.php";
$_SESSION["email"] = $email;
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
    <div class="hallo">
        <h1>
            <?php echo $_SESSION["username"] ?>
        </h1>
        <h2> pas hier je Account aan </h2>
    </div>
    <section class="info">

        <h3>
            <?php echo $_SESSION["email"] ?>
    </section>

    <form action="profileUpdate.php" method="post" class="Update">
        <label for="username"> Change Username
            <input type="text" id="username" name="username" placeholder="change your username here" required>

            <input type="submit" value="Update" class="btn"></input>

    </form>


</body>

</html>