<?php

require_once '../Controller/ProductController.php';

$productController = new \Controller\ProductController();
$xml = $productController->convertDataJsonToXML();

if ($xml) {
    echo "Xml file generated.";
} else {
    echo "Error to generate xml file.";
}