<?php

namespace Service;

class Container
{
    private $configuration;
    private $pdo;
    private $vegetableLoader;
    private $vegetableStorage;
    private $vegetableUpload;
    private $searchVegetables;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }
    /**
     * @return \PDO
     */
    public function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    /**
     * @return vegetableLoader
     */
    public function getVegetableLoader(){
        if ($this->vegetableLoader===null){
            $this->vegetableLoader = new VegetableLoader(new PdoVegetableStorage($this->getPDO()));
        }
        return $this->vegetableLoader;
    }

    public function getVegetableStorage(){
        if($this->vegetableStorage === null){
            $this->vegetableStorage = new PdoVegetableStorage($this->getPDO());
        }
        return $this->vegetableStorage;
    }

    public function getVegetableUpload(){
        $this->vegetableUpload = new VegetableUpload($this->getPDO());
        return $this->vegetableUpload;
    }
    public function getSearchVegetable(){
        $this->searchVegetables = new VegetableSearch($this->getPDO());
        return $this->searchVegetables;

    }
}