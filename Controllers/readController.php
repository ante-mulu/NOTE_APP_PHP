<?php require "Config/Database.php";?>
    <h2>My todo List</h2>
    <?php
    $query = "SELECT id,todoTitle, todoDesc, date from todo";
    $stmt_prepare = db()->prepare($query);
    $stmt_prepare->execute();
    $notes = $stmt_prepare->fetchAll();
    ?>
    <ul>
  <?php require "./Views/read.view.php";?>
    </ul>
</body>
</html>