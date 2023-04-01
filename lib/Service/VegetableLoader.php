<?php

namespace Service;

use Model\VegetableCollection;
use Model\Povrca;

class VegetableLoader
{
    private $vegetableStorage;
    public function __construct(VegetableStorageInterface  $vegetableStorage)
    {
        $this->vegetableStorage = $vegetableStorage;
    }

    public function getVegetables(){
        try{
            $vegetablesData = $this->vegetableStorage->fetchVegetableData();
        }
        catch (\PDOException $e){
            trigger_error('Database Exception'.$e->getMessage());
            $vegetablesData = [];
        }
        $vegetables = array();
        foreach ($vegetablesData as $vegetableData){
            $vegetables[] = $this->createVegetableFromData($vegetableData);
        }
        return new vegetableCollection($vegetables);
    }

    public function createVegetableFromData(array $vegetablesData){
        $vegetable = new Povrca();
        $vegetable->setId($vegetablesData['id']);
        $vegetable->setName($vegetablesData['name']);
        $vegetable->setPrice($vegetablesData['price']);
        return $vegetable;
    }
}