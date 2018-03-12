<?php
namespace models;
use database\DbConnect;

class FilmModel
{
	private $conn;
	function __construct()
	{
		$this->conn = DbConnect::getConnection();
	}
	public function getAllFilms()
	{
		$query = "SELECT * FROM films";
		$resultset = $this->conn->query($query);
		$films = $resultset->fetchAll();
		return $films;
	}
	public function getFilmById($filmId)
	{
		$stmt = $this->conn->prepare("SELECT * FROM films WHERE films.id = :id");
		$stmt->bindValue(':id',$filmId);
		$stmt->execute();
		$film = $stmt->fetch();
		return $film;
	}
	function saveFilm($title, $year, $duration){
		$query="INSERT INTO films (id, title, year, duration) VALUES (NULL, :title, :year, :duration)";
		$stmt=$this->conn->prepare($query);
		$stmt->bindValue(':title', $title);
		$stmt->bindValue(':year', $year);
		$stmt->bindValue(':duration', $duration);
		$affected_rows = $stmt->execute();
		if($affected_rows==1){
			return true;
		}
		return false;
	}
	function deleteFilm($filmId){
		$stmt = $this->conn->prepare("DELETE FROM films WHERE films.id = :id");
		$stmt->bindValue(':id',$filmId);
		$affected_rows=$stmt->execute();
		if($affected_rows==1){
			return true;
		}
		return false;
	}
}

?>