
<?php
use \SimpleFilmApp\Models\FilmModel;

require_once("db.php");
require_once("models/filmmodel.php");
$films=FilmModel::getAllFilms();
$pageTitle="List all films";
include("views/list-view.php");

?>
