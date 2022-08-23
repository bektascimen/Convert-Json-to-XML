<?php

namespace Service;

require_once ('../Repository/ProductRepository.php');
require_once ('../Trait/ProductRepositoryTrait.php');

use Trait\ProductRepositoryTrait;

class ProductService
{
    use ProductRepositoryTrait;

    public function getJsonData()
    {
        return $this->getProductRepository()->getJsonData();
    }
}