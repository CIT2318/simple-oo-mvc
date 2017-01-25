<?php
include("header.inc.php");
?>

<h1>Add a new film</h1>
<form action="index.php?action=addFilm" method="post">
<label for="title">Title:</label>
<input type="text" id="title" name="title">
<label for="year">Year:</label>
<input type="text" id="year" name="year">

<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration">
<input type="submit" name="submitBtn" value="Add Film">
</form>

<?php
include("footer.inc.php");
?>