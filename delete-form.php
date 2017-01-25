<?php
require_once("models/film-model.php");
$films=getAllFilms();
$pageTitle="Delete films";
include("views/delete-form-view.php");
?>