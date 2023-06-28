
<?php
require_once "navigatie.php";
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../script/index.js"></script>
    <link href="../css/main.css" rel="stylesheet">
</head>

<body>


    <div class="account-popup" id="myAccount">


        <form action="account_Registratie.php" method="post" class="account-container">
            <h1> create your account</h1>
            <input type="text" id="username"  name="username" placeholder="your username" required>

            <input type="password" id="wachtwoord" name="password" placeholder="create a password" required>

            <input type="submit" value="registeer" onclick="closeForm()" class="btn"></input>
        </form>
    </div>

</body>

</html>












