<?php
        $title = $note['todoTitle'];
        $description = $note['todoDesc'];

        echo 
        "
            <h2>Edit Todo</h2>
                
            <form action='../Controllers/editController.php?id=$id' method='post'>
                <p>Title</p>
                <input type='text' name='todoTitle' value='$title'>
                <p>Description</p>
                <input type='text' name='todoDesc' value='$description'>
                <br>
                <input type='submit' name='submit' value='edit'>
            </form>
        ";