<?php

namespace Repository;

require_once ('../Concracts/ProductInterface.php');

use Concracts\ProductInterface;

class ProductRepository implements ProductInterface
{
    public function getJsonData()
    {
        return file_get_contents('../' . 'products.json');
    }
}