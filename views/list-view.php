<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<nav>
<ul>
	<li><a href="index.php?action=list">Read</a></li>
	<li><a href="index.php?action=create">Create</a></li>
	<li><a href="index.php?action=edit">Update</a></li>
	<li><a href="index.php?action=delete-list">Delete</a></li>
</ul>
</nav>
<?php

foreach($films as $film){
    echo "<p>";
    echo "<a href='index.php?action=details&id=".$film['id']."'>";
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}
?>
</body>
</html>
