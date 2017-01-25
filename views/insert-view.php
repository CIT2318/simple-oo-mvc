<?php
include("header.inc.php");

echo "<h1>Add new film</h1>";
if($success==1){
	echo "<p>Successfully added the details for ".$title."</p>";
}else{
	echo "<p>There was a problem inserting the data.</p>";
}

include("footer.inc.php");
?>