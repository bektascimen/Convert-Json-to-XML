<?php

namespace Controller;

require_once ('../Trait/ProductServiceTrait.php');
require_once ('../Service/ProductList.php');

use Service\ProductList;
use Trait\ProductServiceTrait;

class ProductController
{
    use ProductServiceTrait;

    public function convertDataJsonToXML()
    {
        $products = $this->getProductService()->getJsonData();
        $productsArray = json_decode($products, true);
        return (new ProductList())->handle($productsArray);
    }
}