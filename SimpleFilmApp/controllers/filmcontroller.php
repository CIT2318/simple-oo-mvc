<?php
namespace SimpleFilmApp\controllers;
use SimpleFilmApp\models\FilmModel;
class FilmController
{
	public function listFilms()
	{
		$films=FilmModel::getAllFilms();
		$this->loadView("list-view",["films"=>$films,"pageTitle"=>"List all films"]);
	}
	
	private function loadView($view,$data)
	{
		extract($data);
		include("views/".$view.".php");
	}
}