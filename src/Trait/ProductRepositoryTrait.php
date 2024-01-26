<?php

namespace Trait;

use src\Concracts\ProductInterface;
use src\Repository\ProductRepository;

trait ProductRepositoryTrait
{
    /** @var ProductInterface $productRepository*/
    private $productRepository;

    /**
     * @return ProductInterface
     */
    public function getProductRepository(): ProductInterface
    {
        if (!$this->productRepository) {
            $this->productRepository = (new ProductRepository());
        }

        return $this->productRepository;
    }
}