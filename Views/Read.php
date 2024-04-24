<?php require "Config/Database.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <h2>My todo List</h2>

    <p><a href="CRUD/create.php">Add to do</a></p>
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
        <?php endforeach;?>

    </ul>
</body>
</html>