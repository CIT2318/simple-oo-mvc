<?php
use SimpleFilmApp\DbConnect;
use SimpleFilmApp\models\FilmModel;
use SimpleFilmApp\controllers\FilmController;

require_once("SimpleFilmApp/dbconnect.php");
require_once("SimpleFilmApp/models/filmmodel.php");
require_once("SimpleFilmApp/controllers/filmcontroller.php");

$arr=["msg"=>"hello","active"=>true];
extract($arr);
echo $msg;

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
} else {
    include("views/404-view.php");
}
?>