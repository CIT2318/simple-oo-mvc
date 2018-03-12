<?php
use controllers\FilmController;

require_once("database/dbconnect.php");
require_once("models/filmmodel.php");
require_once("controllers/filmcontroller.php");

$filmController =  new FilmController();

if(isset($_GET["action"])){
    $action=$_GET['action'];
}else{
    $action="list";
}

if ($action==="list") {
    $filmController->list();
} else if ($action==="details" && isset($_GET['id'])) {
    $filmController->details($_GET['id']);
} else if ($action==="create" ) {
    $filmController->create();
} else if ($action==="save") {
    $filmController->save();
} else if ($action==="delete-list") {
    $filmController->deleteList();
} else if ($action==="delete" && isset($_GET['id'])) {
    $filmController->delete($_GET['id']);
} else {
    require("views/404-view.php");
}



?>