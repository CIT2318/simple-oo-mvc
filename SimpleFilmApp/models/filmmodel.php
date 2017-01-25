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
}

?>