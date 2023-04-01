<?php

namespace Service;

interface VegetableStorageInterface
{
    /**
     * @return array
     */
    public function fetchVegetableData();

    /**
     * @param integer $id
     * @return array()
     */
    public function fetchSingleVegetablesData($id);
}