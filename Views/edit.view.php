
        <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
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
        ?>
        
                </div>
                <hr class="my-4" />
            </div>