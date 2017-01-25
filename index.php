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
} else {
    include("views/404-view.php");
}
?>