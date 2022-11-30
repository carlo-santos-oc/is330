<?php
include_once 'header.php';
?>


<div class="container" style="background-color: #FFFFFF; padding-bottom: 4em">
    <div class="row" style="padding-bottom: 2em;">
        <div class="col-sm-12">
            <img class="img-fluid" src="images/banner-g914925099_1920.jpg" alt="">
            <h1 style="text-align: center; font-size: 8em">&#8800;Cap News</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($article as $art) : ?>
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
                <h5>
                    Author: <?php echo $art['firstName']; ?> <?php echo $art['lastName']; ?>
                </h5>
                <p><small><?php echo $art['publishDate']; ?></small></p>

                <h3>
                    <?php echo $art['headline']; ?>
                </h3>
                <p>
                    <?php echo $art['body']; ?>
                </p>
                <form class="delete-button" action="delete-article.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="articleID" value="<?php echo $art['articleID']; ?>">
                        <input type="hidden" name="authorID" value="<?php echo $art['authorID']; ?>">
                        <input type="submit" value="Delete" class="btn btn-warning">
                    </div>
                </form>

            </div>
            <div class="col-sm-2">&nbsp;</div>
        <?php endforeach; ?>

    </div>
</div>
</div>
</body>

</html>