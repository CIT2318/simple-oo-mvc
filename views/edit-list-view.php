<!DOCTYPE HTML>
<html>
<head>
<title>Edit the films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="index.php?action=list">Read</a></li>
	<li><a href="index.php?action=create">Create</a></li>
	<li><a href="index.php?action=edit">Update</a></li>
    <li><a href="index.php?action=delete-list">Delete</a></li>
</ul>
<?php
foreach ($films as $film) {
    echo "<p>";
    echo $film["title"];
    //outputs a hyperlink for each film e.g. <a href="edit.php?id=4">edit</a>
    //each hyperlink has a query string (look back at practical 1) that specifies which film has been clicked on
    echo " (<a href='index.php?action=edit-list&id=" . $film["id"] . "'>edit</a>)";
    echo "</p>";
}

?>
</body>
</html>