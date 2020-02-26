<!DOCTYPE html>
<html>
<head>
<title>My To Do List</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
<header>
<h1>My To Do List</h1><br><br>
</header>
<main>
<h2>Add Item</h2>
<form action="add_item.php" method="post" id="add_item_form">
<label>Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="title" max="20" required><br>
<label>Description:</label>
<input type="text" name="description" max="50" required><br>
<label>&nbsp;</label>
<input type="submit" value="Add Item"><br>
</form>
<p><a href="index.php">View To Do List</a></p>
</main>
<div id="footer">
 <p>&copy; <?php echo date("Y"); ?> My To Do List</p>
</footer>
</div>
</div>
</body>
</html>