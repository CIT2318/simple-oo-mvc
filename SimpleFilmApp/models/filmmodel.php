<?php
namespace SimpleFilmApp\Models;
use SimpleFilmApp\DbConnect;

class FilmModel{
	
	public static function getAllFilms()
	{
		$conn = DbConnect::getConnection();
		$query = "SELECT * FROM films";
		$resultset = $conn->query($query);
		$films=[];

		while ($film = $resultset->fetch()) {
		    $films[] = $film;
		}
		DbConnect::closeConnection();
		return $films;
	}

	public static function getFilmById($filmId)
	{
		$conn = DbConnect::getConnection();
		$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
		$stmt->bindValue(':id',$filmId);
		$stmt->execute();
		$film = $stmt->fetch();
		DbConnect::closeConnection();
		return $film;
	}

	public static function insertFilm($title,$year,$duration)
	{
		$conn = DbConnect::getConnection();
		$query="INSERT INTO films (id, title, year, duration) VALUES (NULL, :title, :year, :duration)";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(':title', $title);
		$stmt->bindValue(':year', $year);
		$stmt->bindValue(':duration', $duration);
		$affected_rows = $stmt->execute();
		DbConnect::closeConnection();
		return $affected_rows;
	}
	public static function deleteFilm($filmId)
	{
		$conn = DbConnect::getConnection();
		$query="DELETE FROM films WHERE films.id=:id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(':id', $filmId);
		$affected_rows = $stmt->execute();	
		DbConnect::closeConnection();
		return $affected_rows;
	}
}

?>