<?php

namespace Trait;

require_once ('../Service/ProductService.php');

use src\Service\ProductService;

trait ProductServiceTrait
{
    /** @var ProductService $productService */
    private $productService;

    public function getProductService(): ProductService
    {
        if (!$this->productService) {
            $this->productService = new ProductService();
        }

        return $this->productService;
    }
}