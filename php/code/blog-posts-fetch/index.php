<?php
try {
    $conn = new PDO('mysql:host=db;dbname=blog', 'root', 'admin');
} catch (\PDOException $e) {
    echo $e->getMessage();
}

$pQuery = $conn->prepare("SELECT * FROM `posts`");

$author = "admin";

$pQuery->bindParam(':author', $author, PDO::PARAM_STR);

$pQuery->execute();

var_dump($pQuery->fetchAll());