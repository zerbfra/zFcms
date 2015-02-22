<div class="col-sm-3 col-sm-offset-1 blog-sidebar hidden-xs">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>I'm an <em>italian student and indie developer</em>.<br>
            I currently have a Bachelor's Degree and I'm going to graduate of a Master's Degree
            in Computer Engineering at Politecnico di Milano.
        </p>
    </div>

    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">

            <?php
                $archive = list_archive();
                foreach ($archive as $date) {
                    echo "<li><a href='index.php?archive=".$date."''>".$date."</a></li>";
                }
            ?>

        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/zerbfra" target="_blank"><i class="fa fa-github"></i> GitHub</a></li>
            <li><a href="https://twitter.com/zerbfra" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li><a href="mailto:me@zerbinatifrancesco.it"><i class="fa fa-envelope"></i> Mail</a></li>
        </ol>
    </div>


</div><!-- /.blog-sidebar -->
