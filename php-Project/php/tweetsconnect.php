<?php

session_start();

require_once "database.php";

$account_id = $_SESSION["id"] ;

$tweets = $_POST["tweet"];
$insert_tweet = $conn->prepare("INSERT INTO content (tweets, user_id)VALUES (:tweets, :user_id)");
$insert_tweet->bindParam(":tweets", $tweets);
$insert_tweet->bindParam(":user_id", $account_id);

$insert_tweet->execute();

$get_all_tweets = $conn->prepare("SELECT tweets, user_id FROM content");
$get_all_tweets->execute();

$tweets = $get_all_tweets->fetchAll();

header("location:index.php");









