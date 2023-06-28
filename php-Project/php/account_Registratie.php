<?php
session_start();
require_once "database.php";


$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$insert_user = $conn->prepare("INSERT INTO users (username, password)VALUES (:username, :password)");
$insert_user->bindParam(":username", $username);
$insert_user->bindParam(":password", $hashed_password);
$insert_user->execute();
$_SESSION["username"]= $username;
header('Location:index.php');

