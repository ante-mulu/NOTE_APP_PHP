<?php
require "../Config/Database.php";
$id=$_GET['id'];
$query= "select id, todoTitle,todoDesc,date from todo where id=$id";
$stmt= db()->prepare($query);
$stmt->execute();
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
require "../Views/detail.view.php";
