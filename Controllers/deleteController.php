<?php
require "../Config/Database.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="delete from todo where id='$id'";
    $stmt = db()->prepare($query);
    $stmt->execute();

}
?>
<ul>
<?php
$query= "select id, todoTitle,todoDesc,date from todo";
$stmt= db()->prepare($query);
$stmt->execute();
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach($notes as $note):?>
    <?php 
    $date=$note["date"];
        ?>
    <li><a href="detail.php?id=<?php echo $note["id"];?>"><?php echo $note["todoTitle"];?></a>- <?php echo  $date; ?></li>
    <button type="button"><a href="/Controllers/editController.php?id=<?php echo $note["id"]?>">Edit</a></button>
    <button type="button"><a href="/Controllers/deleteController.php?id=<?php echo $note["id"]?>">Delete</a></button>
<?php endforeach;?>

</ul>