<?php
require_once("database.php");
session_start();
echo "<pre>".print_r($_POST, true)."</pre>";
$account_id = $_SESSION["id"];
$email = $_POST["email"];
$username = $_POST["username"];
$sql = "UPDATE users SET  username ='$username' WHERE id='$account_id'";



$stmt = $conn->prepare($sql);


$stmt->execute();
session_destroy();
header('Location:inlog.php');

exit();
?>