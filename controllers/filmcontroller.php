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
	function save(){
		$title=$_POST['title'];
		$year=$_POST['year'];
		$duration=$_POST['duration'];
		$msg="";
		if($this->filmModel->saveFilm($title,$year,$duration)){
		    $msg="Successfully added the details for ".$title;
		}else{
		    $msg="There was a problem inserting the data";
		}
		$this->loadView("save-view", ["pageTitle"=>"Save film","msg"=>$msg]);
	}
	function deleteList(){
		$films = $this->filmModel->getAllFilms();
		$this->loadView("delete-list-view", ["pageTitle"=>"Delete films","films"=>$films]);
	}
	function delete($filmId){
		$msg="";
	    if($this->filmModel->deleteFilm($filmId)){
		    $msg="Deleted film with id of ".$filmId." from the database.";
		}else{
		    $msg="There was a problem deleting the record.";
		}
	    $this->loadView("delete-view", ["msg"=>$msg,"pageTitle"=>"Delete film"]);
	}
	private function loadView($view,$data)
	{
		extract($data);
		require("views/".$view.".php");
	}
}