
<?php
require 'Config/Database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT todoTitle, todoDesc FROM todo WHERE id =$id";
    $stmt = db()->prepare($query);
    $stmt->execute();

    $note = $stmt->fetch(PDO::FETCH_ASSOC);
    if($note){
        $title = $note['todoTitle'];
        $description = $note['todoDesc'];

        echo "
            <h2>Edit Todo</h2>
                
            <form action='edit.php?id=$id' method='post'>
                <p>Title</p>
                <input type='text' name='todoTitle' value='$title'>
                <p>Description</p>
                <input type='text' name='todoDesc' value='$description'>
                <br>
                <input type='submit' name='submit' value='edit'>
            </form>
        ";
    } 
    if(isset($_POST['submit'])){
        $title = $_POST['todoTitle'];
        $description = $_POST['todoDesc'];

        $query = "UPDATE todo SET todoTitle = '$title', todoDesc= '$description' WHERE id = '$id'";
        $stmt = db()->prepare($query);
        $stmt->execute();
        echo "Successfully updated";
    }
}