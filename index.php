<?php
require_once('database.php');

$query = 'SELECT * FROM todoitems ORDER BY ItemNum';
$statement = $db->prepare($query);
$statement->execute();
$todoitems = $statement->fetchAll();
$statement->closeCursor();

?>
<!DOCTYPE html>
<html>
<head>
    <title>My To Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
<header>
<h1>My To Do List</h1><br><br>
</header>
<main>
<section>
<?php if( sizeof($todoitems) != 0 ) { ?>
<div>
<table>
<thead>
<tr>
<th>ItemNum</th>
<th>Title</th>
<th colspan="2">Description</th>
</tr>
</thead>
<tbody>
<?php foreach ($todoitems as $item) : ?>
<tr>
<td><?php echo $item['ItemNum']; ?></td>
<td><?php echo $item['Title']; ?></td>
<td><?php echo $item['Description']; ?></td>
<td><form action="delete_item.php" method="post">
<input type="hidden" name="item_num" value="<?php echo $item['ItemNum']; ?>">
<input type="submit" value="Remove">
</form></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<p><a href="add_item_form.php">Click here</a> to add a new item to the list.</p>     
<?php } else { ?>
<p>No to do list items exist yet. <a href="add_item_form.php">Click here</a> to add an item.</p>     
<?php } ?>
</section>
</main>
<div id="footer">
<p>&copy; <?php echo date("Y"); ?> My To Do List</p>
</footer>
</div>
</div>
</body>
</html>