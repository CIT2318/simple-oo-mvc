<?php
require_once("models/film-model.php");
$filmIds=$_POST['films'];
$affected_rows = 0;
foreach($filmIds as $filmId)
{
	$affected_rows += deleteFilm($filmId);
}
$pageTitle="Deleting films";
include("views/delete-view.php");


?>
