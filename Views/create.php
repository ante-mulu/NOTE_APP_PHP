<?php
require "Config/Database.php";
if(isset($_POST["submit"]))
{
    $title = $_POST["todoTitle"];
    $desc = $_POST["todoDesc"];
    
    // Using prepared statements to prevent SQL injection
    $query = "INSERT INTO todo (todoTitle, todoDesc, date) VALUES('$title', '$desc', now())";
    $statement = db()->prepare($query);
    $statement->execute();
    
}
?>
<h1>Todo List</h1>
    <form action="CRUD/create.php" method="POST">
    <P>Todo List</P>
    <input type="text" name="todoTitle">
    <P>Todo Description</P>
    <input type="text" name="todoDesc">
    <br>
    <input type="submit" name="submit" value="add">
    </form>

