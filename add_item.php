<?php
$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');
if ($title == null || $description == null) {
    $error = "Invalid to do item data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');  
    $query = 'INSERT INTO todoitems 
                 (Title, Description)
              VALUES
                 (:title, :descr)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':descr', $description);
    $statement->execute();
    $statement->closeCursor();
    include('index.php');
}
?>