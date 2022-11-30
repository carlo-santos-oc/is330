<?php
require_once('admin.php');

// Get IDs
$article_id = filter_input(INPUT_POST, 'articleID', FILTER_VALIDATE_INT);
$author_id = filter_input(INPUT_POST, 'authorID', FILTER_VALIDATE_INT);

// Delete the article from the database
if ($article_id != false && $author_id != false) {
    $query = 'DELETE FROM article
              WHERE articleID = :article_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':article_id', $article_id);
    $success = $statement->execute();
    $statement->closeCursor();
}

// Display the index page
include('index.php');
