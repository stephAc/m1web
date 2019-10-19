<?php

namespace App\API\Repository;

use App\API\Core\Database;

class CountryRepository{
    private $database;
    private $connection;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function getCountriesAndCapitals():array
    {
        $sql = "
			SELECT name, (SELECT name FROM destination.city WHERE id = city_id) AS cityName
			FROM destination.country;
		";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $results = $query->fetchAll();
        return  $results;
    }
}