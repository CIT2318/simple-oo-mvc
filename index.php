<?php
use SimpleFilmApp\DbConnect;
use SimpleFilmApp\models\FilmModel;
use SimpleFilmApp\controllers\FilmController;

require_once("SimpleFilmApp/dbconnect.php");
require_once("SimpleFilmApp/models/filmmodel.php");
require_once("SimpleFilmApp/controllers/filmcontroller.php");

$filmController =  new FilmController();

if(isset($_GET["action"])){
    $action=$_GET['action'];
}else{
    $action="list";
}


if ($action==="list") {
    $filmController->listFilms();
} else if ($action==="details" && isset($_GET['id'])) {
    $filmController->filmDetails($_GET['id']);
} else if ($action==="addFilmForm") {
    $filmController->addFilmForm();
} else if ($action==="addFilm") {
    $filmController->addFilm();
} else if ($action==="deleteFilmsForm") {
    $filmController->deleteFilmsForm();
} else if ($action==="deleteFilms") {
    $filmController->deleteFilms();
} else {
    include("views/404-view.php");
}
?>