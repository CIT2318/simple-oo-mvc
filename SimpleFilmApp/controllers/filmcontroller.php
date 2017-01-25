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
	
	public function filmDetails($id)
	{
		$film=FilmModel::getFilmById($id);
		$this->loadView("details-view",["film"=>$film, "pageTitle"=>"Film details"]);
	}

	public function addFilmForm()
	{
		$this->loadView("insert-form-view",["pageTitle"=>"Insert new film"]);
	}

	public function addFilm()
	{
		$title=$_POST['title'];
		$year=$_POST['year'];
		$duration=$_POST['duration'];
		$success = FilmModel::insertFilm($title, $year, $duration);
		$this->loadView("insert-view",["success"=>$success,"pageTitle"=>"Inserting a new film","title"=>$title]);
	}

	public function deleteFilmsForm()
	{
		$films=FilmModel::getAllFilms();
		$this->loadView("delete-form-view",["films"=>$films,"pageTitle"=>"Delete films"]);
	}
	public function deleteFilms()
	{
		$filmIds=$_POST['films'];
		$affectedRows = 0;
		foreach($filmIds as $filmId)
		{
			$affectedRows += FilmModel::deleteFilm($filmId);
		}
		$affectedRows = $affectedRows;

		$this->loadView("delete-view",["affectedRows"=>$affectedRows,"pageTitle"=>"Deleting films"]);
	}

	private function loadView($view,$data)
	{
		extract($data);
		include("views/".$view.".php");
	}
}