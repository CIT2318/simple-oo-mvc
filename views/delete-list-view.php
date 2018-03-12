<!DOCTYPE HTML>
<html>
<head>
<title>Delete films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="index.php?action=list">Read</a></li>
	<li><a href="index.php?action=create">Create</a></li>
	<li><a href="index.php?action=edit">Update</a></li>
	<li><a href="index.php?action=delete">Delete</a></li>
</ul>
<?php
foreach ($films as $film) {
    echo "<p>";
    echo $film["title"];
    //outputs a hyperlink for each film e.g. <a href="details.php?id=4">delete</a>
    //each hyperlink has a query string (look back at practical 1) that specifies which film has been clicked on
	echo " (<a href='delete.php?id=" . $film["id"] . "'>delete</a>)";
    echo "</p>";
}

?>
</body>
</html>