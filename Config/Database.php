<?php
function db(){
    $servername ="localhost";
    $username = "root";
    $password = "DKFF3fkts(Q2*Gw!";
    $dbname = "todolist";
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password );
    return $conn;
}
