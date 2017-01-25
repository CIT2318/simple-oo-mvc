<?php
require_once("models/film-model.php");

//do some form validation
$title=$_POST['title'];
$year=$_POST['year'];
$duration=$_POST['duration'];

$success = insertFilm($title, $year, $duration);

$pageTitle="Insert new film";
include("views/insert-view.php");

?>
