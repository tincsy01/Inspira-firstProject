<?php
use Service\Container;

require '../../../bootstrap.php';
require VIEW . 'header.php';
require '../../../vendor/autoload.php';
global $configuration;

$container = new Container($configuration);
?>

    <form method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control col-lg-3 col-sm-3 col-xs-3 search-input" name="searchTerm" id="search">
            <button class="btn btn-outline-secondary" type="submit" id="button-search" name="button_search">Traži</button>
        </div>
    </form>

    <div class="search-informations">
        <?php
        if(isset($_POST['button_search'])){
            $searchTerm = $_POST['searchTerm'];

            $vegetableSearch = $container->getSearchVegetable();
            $data = $vegetableSearch->vegetableSearch($searchTerm);
        }
        ?>

    </div>
<?php
require VIEW . 'footer.php';
