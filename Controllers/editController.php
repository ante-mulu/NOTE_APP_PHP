
<?php
require "../Config/Database.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT todoTitle, todoDesc FROM todo WHERE id =$id";
    $stmt = db()->prepare($query);
    $stmt->execute();
    $note = $stmt->fetch(PDO::FETCH_ASSOC);
    if($note){
        require "../Views/edit.view.php";
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