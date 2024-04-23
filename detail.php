<?php
require "Config/Database.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}?>
<ul>
<?php
$query= "select id, todoTitle,todoDesc,date from todo where id=$id";
$stmt= db()->prepare($query);
$stmt->execute();
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach($notes as $note):?>
    <?php $date=$note["date"];?>
    <p><?php echo $note["todoDesc"];?></p>
<?php endforeach;?>

</ul>