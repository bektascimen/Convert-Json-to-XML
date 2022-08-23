<?php

namespace Service;

require_once ('AkakceXMLProductList.php');

use Concracts\ProductListInterface;
use SimpleXMLElement;

class ProductList
{
    private ProductListInterface $akakceXMLProductList;

    public function __construct()
    {
        $this->akakceXMLProductList = new AkakceXMLProductList();
    }

    public function handle(array $productsArray)
    {
        $xml = new SimpleXMLElement('<products/>');

        return $this->akakceXMLProductList->convertToXml($productsArray,$xml);
    }
}