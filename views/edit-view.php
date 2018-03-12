<!DOCTYPE HTML>
<html>
<head>
<title>Edit the film details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="index.php?action=list">Read</a></li>
	<li><a href="index.php?action=create">Create</a></li>
	<li><a href="index.php?action=edit">Update</a></li>
	<li><a href="index.php?action=delete-list">Delete</a></li>
</ul>
<h1>Edit film details</h1>
<form action="index.php?action=update.php" method="post">
<!-- <input type="hidden"> creates a hidden text field i.e. not visible to the user
	we use it to store the id number of the selected film -->
<input type="hidden" name="id" value="<?php echo $film["id"];?>">
<label for="title">Title:</label>
<input type="text" id="title" name="title" value="<?php echo $film["title"];?>">
<label for="year">Year:</label>
<input type="text" id="year" name="year" value="<?php echo $film["year"];?>">
<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration" value="<?php echo $film["duration"];?>">
<label for="certificate">Certificate:</label>
<input type="submit" name="submitBtn" value="Update film details">
</form>

</body>
</html>