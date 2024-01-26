<?php

namespace src\Repository;

require_once ('../Concracts/ProductInterface.php');

use src\Concracts\ProductInterface;

class ProductRepository implements ProductInterface
{
    public function getProducts()
    {
        return file_get_contents('../../products.json');
    }
}