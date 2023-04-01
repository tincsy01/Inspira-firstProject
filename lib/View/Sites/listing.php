<?php

use Service\Container;
require '../../../bootstrap.php';
require VIEW . 'header.php';
require '../../../vendor/autoload.php';
global $configuration;

$container = new Container($configuration);
$vegetableLoader = $container->getVegetableLoader();
$vegetables = $vegetableLoader->getVegetables();
?>
<div class="container">
    <div class="page-header">
        <h1>Povrce u prodavnicu</h1>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Povrca</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($vegetables as $vegetable): ?>
            <tr>
                <td><?php echo $vegetable->getId()?></td>
                <td><?php echo $vegetable->getName()?></td>
                <td><?php echo $vegetable->getPrice()?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    require VIEW . 'footer.php';

    ?>


