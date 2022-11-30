<?php
require_once('admin.php');

// Get all articles
$query = 'SELECT author.authorID, author.firstName, author.lastName
FROM author';
$statement = $db->prepare($query);
$statement->execute();
$author = $statement->fetchAll();
$statement->closeCursor();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="nav">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="form.php">Post</a>
            <a class="nav-link" href="edit-info.php">Edit Name</a>
            <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
        </nav>
    </div>
    <div class="container">
        <div class="row" style="padding-bottom: 2em;">
            <div class="col-sm-12">
                <img class="img-fluid" src="images/banner-g914925099_1920.jpg" alt="">
                <h1 style="text-align: center;">&#8800;Cap News</h1>
            </div>
        </div>
        <?php foreach ($author as $auth) : ?>
            <div class="row">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8">
                    <form class="form" action="update-info.php" method="post" id="update-info-form">
                        <h5>
                            Author: <?php echo $auth['firstName']; ?> <?php echo $auth['lastName']; ?>
                        </h5>
                        <input type="hidden" name="authorID" value="<?php echo $auth['authorID']; ?>">
                        <div class="form-group">
                            <label for="author">First Name</label>
                            <input class="form-control" type="text" name="firstName" value="<?php echo $auth['firstName']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="author">Last Name</label>
                            <input class="form-control" type="text" name="lastName" value="<?php echo $auth['lastName']; ?>">
                        </div>
                        <input class="btn btn-info" type="submit" name="update" value="Update">
                    </form>
                </div>
                <div class="col-sm-2">&nbsp;</div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>