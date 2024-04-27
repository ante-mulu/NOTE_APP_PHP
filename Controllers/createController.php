<?php
require "../Config/Database.php";
if(isset($_POST['submit'])){
    $title = $_POST['todoTitle'];
    $desc = $_POST['todoDesc'];
    $query = "INSERT INTO todo(todoTitle,todoDesc,date) values('$title','$desc', now())";
    $statement=db()->prepare($query);
    $statement->execute();
}
?>
<?php require"../Views/create.view.php";
