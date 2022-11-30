<?php
session_start();
?>
<?php
require_once('admin.php');

// Get all articles
$query = 'SELECT author.authorID, author.firstName, author.lastName, article.headline, article.body, article.publishDate, article.articleID
FROM author
INNER JOIN article ON article.authorID=author.authorID;';
// $query = 'SELECT * FROM article';
$statement = $db->prepare($query);
$statement->execute();
$article = $statement->fetchAll();
$statement->closeCursor();
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#8800;Cap News</title>

    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body style="background-color: #45fcba">
    <div class="container-fluid" style="background-color: #FFF;">
        <nav class="nav" style="background-color: #FFF;">
            <?php
            if (isset($_SESSION['authorEmail'])) {
            ?>
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="form.php">Post</a>
                <a class="nav-link" href="edit-info.php">Edit Name</a>
                <a class="nav-link" href=""><?php echo $_SESSION['authorEmail']; ?></a>
                <a class="nav-link" href="logout.sc.php">Logout</a>
                <?php
                print_r($_SESSION);
                ?>
            <?php
            } else {
            ?>
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="signup.php">Sign up</a>
                <a class="nav-link" href="login.php">Login</a>
                <?php
                print_r($_SESSION);
                ?>
            <?php
            }
            ?>
        </nav>
    </div>