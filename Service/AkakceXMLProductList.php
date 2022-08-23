<?php

namespace Service;

require_once ('../Concracts/ProductListInterface.php');

use Concracts\ProductListInterface;

class AkakceXMLProductList implements ProductListInterface
{
    private const COMPANY_NAME = "Akakce";

    public function convertToXml($array, &$xml)
    {
        foreach ($array as $key => $value) {
            if(is_array($value)){
                $product = $xml->addChild('product');
                $this->convertToXml($value, $product);
            }
            else {
                $xml->addChild($key, $value);
            }
        }

        return $xml->asXML("../XML/" . self::COMPANY_NAME . "-products-" . strtotime(gmdate('Y-m-d H:i:s')) . ".xml");
    }
}