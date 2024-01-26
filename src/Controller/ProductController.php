<?php

namespace src\Controller;

require_once ('../Trait/ProductServiceTrait.php');

use Trait\ProductServiceTrait;

class ProductController
{
    use ProductServiceTrait;

    /**
     * @throws \Exception
     */
    public function convertDataJsonToXML()
    {
        try {
            $products = $this->getProductService()->getProducts();
            $productsArray = json_decode($products, true);
            $xmlData = $this->getProductService()->convertProductsToXml($productsArray);
        } catch (\Exception $exception) {
            throw new $exception;
        }

        return $xmlData;
    }
}