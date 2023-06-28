<?php

require_once("database.php");
require_once("navigatie.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
<div class="account-popup" id="myAccount">


    <form action="inlog.php" method="post" class="account-container">
        <h1> Login</h1>
        <input type="text" id="username" name="username" placeholder="your username" required>

        <input type="password" id="wachtwoord" name="password" placeholder="create a password" required>

        <input type="submit" value="Login" class="btn"></input>
    </form>
</div>
</body>
<?php

// als je al bent ingelogd 
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location:index.php");
    exit(); 
}


// variables en lege values
$username = $password = "";
$username_err = $password_err = $login_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// kijken of username leeg is
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

//  wachtwoord leeg is ?
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

// Valiedatie  van gegevens
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if ($stmt = $conn->prepare($sql)) {

            $stmt->bindParam(":username", $param_username,PDO::PARAM_STR);


            $param_username = trim($_POST["username"]);

            //  uitvoeren van statement
            if ($stmt->execute()) {
                // kijken of deze username in de database staat.

                if ($row = $stmt->fetch()) {
                    $id = $row["id"];
                    $username = $row["username"];
                    $hashed_password = $row["password"];

                    if (password_verify($password, $hashed_password)) {
                        // password is correct nieuwe sesie
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        header("location:index.php");

                    } else {

                        echo "<div class ='errorLog'>Verkeerd wachtwoord of Gebruikersnaam!! </div>";
                    }
                } else {

                    echo "<div class ='errorLog'>Verkeerd wachtwoord of Gebruikersnaam!! </div>";
                }
            } else {
                echo "<div class ='errorLog'>iets ging verkeerd probeer het opnieuw!! </div>";
            }


            unset($stmt);
        }
    }


    unset($conn);
}

?>
</html>