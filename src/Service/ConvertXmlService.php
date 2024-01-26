<?php

namespace src\Service;

require_once('../Concracts/ConvertInterface.php');

use src\Concracts\ConvertInterface;

class ConvertXmlService implements ConvertInterface
{
    private const COMPANY_NAME = "akakce";

    public function convertData($array, &$xml)
    {
        foreach ($array as $key => $value) {
            if(is_array($value)){
                $product = $xml->addChild('product');
                $this->convertData($value, $product);
            }
            else {
                $xml->addChild($key, $value);
            }
        }

        return $xml->asXML("../XML/" . self::COMPANY_NAME . "-products-" . strtotime(gmdate('Y-m-d H:i:s')) . ".xml");
    }
}