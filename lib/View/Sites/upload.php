<?php

use Service\Container;

require '../../../bootstrap.php';
require VIEW . 'header.php';
?>
<div class="container">
    <form method="post">
        <div class="input-group mb-3 ">
            <input type="text" class="form-control col-lg-3 col-sm-3 col-xs-3 search-input" name="name"
            placeholder="Ime povrća"><br>
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control col-lg-3 col-sm-3 col-xs-3 search-input" name="price"
            placeholder="Cena povrća"><br>
        </div>
        <button type="submit"class="btn btn-outline-secondary" id="button-add" name="add_button">Dodaj</button>
    </form>
</div>
<?php
if(isset($_POST['add_button'])){
    $name = $_POST['name'];
    $price = (int)$_POST['price'];
    $container = new Container($configuration);
    $vegetableUpload = $container->getVegetableUpload();
    $data = $vegetableUpload->vegetableUpload($name, $price);
}

require VIEW . 'footer.php';
?>

