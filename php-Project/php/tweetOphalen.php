<?php
require_once "database.php";
$get_all_tweets = $conn->prepare("SELECT tweets, user_id FROM content");
$get_all_tweets->execute();

$tweets = $get_all_tweets->fetchAll();
