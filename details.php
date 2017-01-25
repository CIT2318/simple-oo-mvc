
<?php
require_once("models/film-model.php");
$filmId=$_GET['id'];
$film=getFilmById($filmId);
$pageTitle="Film details";
include("views/details-view.php");
?>