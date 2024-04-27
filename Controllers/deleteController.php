<?php
require "../Config/Database.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="delete from todo where id='$id'";
    $stmt = db()->prepare($query);
    $stmt->execute();

}
?>