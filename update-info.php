<?php
// Get the form data
$author_id = filter_input(INPUT_POST, 'authorID', FILTER_VALIDATE_INT);
// $image_id = filter_input(INPUT_POST, 'imageID', FILTER_VALIDATE_INT);
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');

// Validate inputs
if ($author_id == null || $author_id == false ||
        $firstName == null) {
    $error = "Invalid developer data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('admin.php');

    // Update the database  
    $query = 'UPDATE author
              SET firstName = :firstName, lastName = :lastName
              WHERE authorID = :author_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
