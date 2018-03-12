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
}

?>