<p><a href="Controllers/createController.php">NEW NOTE</a></p>
<body>
        <!-- Navigation-->
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('Assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Anteneh's Blog</h1>
                            <span class="subheading">Anteneh's tought on different issues</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <!-- <a href="/post.php">
                            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                        </a> -->
<?php foreach($notes as $note):?>
            <h2>
                <a href="../Controllers/detailController.php?id=<?php echo $note['id']; ?>"><?php echo $note["todoTitle"];?></a>- <?php echo  $note["date"];; ?>
</h2>
            <button type="button"><a href="/Controllers/editController.php?id=<?php echo $note["id"];?>">Edit</a></button>
            <button type="button"><a href="/Controllers/deleteController.php?id=<?php echo $note["id"];?>">Delete</a></button>
<?php endforeach;?>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2023
                        </p>
                    </div>
                    <!-- Divider-->
               
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Asset/js/scripts.js"></script>
    </body>