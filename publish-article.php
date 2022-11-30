<?php
// Get form data
$author_id = filter_input(INPUT_POST, 'authorID', FILTER_VALIDATE_INT);
$headline = filter_input(INPUT_POST, 'headline');
$publish_date = filter_input(INPUT_POST, 'publishdate');
$body = filter_input(INPUT_POST, 'body');
// Validate inputs
if ($author_id == null || $author_id == false ||
        $body == null) {
    $error = "Invalid body data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('admin.php');

    // Add article to database  
    $query = 'INSERT INTO article
                 (authorID, headline, publishDate, body)
              VALUES
                 (:author_id, :headline, :publish_date, :body)';
    $statement = $db->prepare($query);
    $statement->bindValue(':author_id', $author_id);
    $statement->bindValue(':headline', $headline);
    $statement->bindValue(':publish_date', $publish_date);
    $statement->bindValue(':body', $body);
    $statement->execute();
    $statement->closeCursor();

    header('location: index.php?error=posted');
    // include('index.php');
}
