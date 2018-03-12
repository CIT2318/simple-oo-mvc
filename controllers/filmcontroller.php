<?php
namespace controllers;
use models\FilmModel;
class FilmController
{
	private $filmModel;
	function __construct(){

		$this->filmModel = new FilmModel();
	}
	public function list()
	{
		$films=$this->filmModel->getAllFilms();
		$this->loadView("list-view", ["films"=>$films,"pageTitle"=>"List all films"]);
	}
	function details($filmId){
	    $film = $this->filmModel->getFilmById($filmId);
	    $this->loadView("details-view", ["film"=>$film,"pageTitle"=>"Film Details"]);
	}
	function create(){
		$this->loadView("create-view", ["pageTitle"=>"Create a new film"]);
	}
	private function loadView($view,$data)
	{
		extract($data);
		require("views/".$view.".php");
	}
}