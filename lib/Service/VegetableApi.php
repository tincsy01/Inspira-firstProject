<?php

namespace Service;
require_once 'VegetableSearch.php';
class VegetableApi
{
    protected $vegetableSearch;
    public function __construct() {
        $this->vegetableSearch = new VegetableSearch();
    }
    public function searchVegetables() {
        $searchTerm = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : null;

        $searchResults = $this->vegetableSearch->searchVegetables($searchTerm);

        header('Content-Type: application/json');
        echo json_encode($searchResults);
    }
}
$vegetableApi = new VegetableApi();
$vegetableApi->searchVegetables();