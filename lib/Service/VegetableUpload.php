<?php

namespace Service;

class VegetableUpload
{
    private $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function vegetableUpload($name, $price){
        $pdo = $this->pdo;
        $query = $pdo->prepare('INSERT INTO povrca (name, price) 
                                        VALUES (:name, :price)');
        $query->execute(array('name'=>$name, 'price'=>$price));
    }

}