<?php
include("header.inc.php");
echo "<h1>Delete Films</h1>";
echo "<form action='index.php?action=deleteFilms' method='post'>";
foreach ($films as $film) {
	echo "<p>";
    echo "<input type='checkbox' name='films[]' id='film-".$film["id"]."' value='".$film["id"]."'>";
    echo "<label for='film-".$film["id"]."'>".$film["title"]."</label>";
    echo "</p>";
}
echo "<input type='submit' name='submitBtn' value='delete these films'>";
echo "</form>";

include("footer.inc.php");
?>