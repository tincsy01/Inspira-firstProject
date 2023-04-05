<?php

namespace Service;

class VegetableSearch
{
    protected $vegetables;
    private $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function vegetableSearch($searchTerm) {
        $pdo = $this->pdo;

        $query = $this->pdo->prepare('SELECT name FROM povrca WHERE name LIKE ?');

        $searchTerm = "%{$searchTerm}%";
        $query->bindParam(1, $searchTerm);

        $query->execute();

        $response = $query->fetchAll(\PDO::FETCH_ASSOC);

        if(count($response) > 0){
            foreach ($response as $row){
                echo $row["name"] . "<br>";
            }

        }
       // header('Content-Type: application/json');
        return 'Ne postoji takvo povrće sa ovim imenom';
    }
}