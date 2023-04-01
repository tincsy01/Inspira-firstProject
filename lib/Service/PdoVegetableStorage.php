<?php

namespace Service;

class PdoVegetableStorage implements VegetableStorageInterface
{
    private $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchVegetableData(){
        $pdo = $this->pdo;
        $query = $this->pdo->prepare('SELECT * FROM povrca');
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchSingleVegetablesData($id){
        $pdo = $this->pdo;
        $query = $this->pdo->prepare('SELECT * FROM povrca WHERE id = :id');
        $query->execute(array('id' => $id));
        $vegetableArray = $query->fetch(\PDO::FETCH_ASSOC);
        if(!$vegetableArray){
            return null;
        }
        return $vegetableArray;

    }
}