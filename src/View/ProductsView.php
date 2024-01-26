<?php

require_once '../Controller/ProductController.php';

$productController = new \src\Controller\ProductController();

try {
    $xml = $productController->convertDataJsonToXML();
    if ($xml) {
        echo "Xml file generated.";
    } else {
        echo "Error to generate xml file.";
    }
} catch (Exception $e) {
    throw new $e;
}