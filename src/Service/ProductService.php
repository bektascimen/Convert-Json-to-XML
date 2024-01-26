<?php

namespace src\Service;

require_once ('../Repository/ProductRepository.php');
require_once ('../Trait/ProductRepositoryTrait.php');
require_once ('../Trait/ConvertXmlServiceTrait.php');

use SimpleXMLElement;
use Trait\ConvertXmlServiceTrait;
use Trait\ProductRepositoryTrait;

class ProductService
{
    use ProductRepositoryTrait,
        ConvertXmlServiceTrait;

    public function getProducts()
    {
        return $this->getProductRepository()->getProducts();
    }

    public function convertProductsToXml(array $productsArray)
    {
        $xml = new SimpleXMLElement('<products/>');

        return $this->getConvertXmlService()->convertData($productsArray,$xml);
    }
}