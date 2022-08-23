<?php

namespace Trait;

use Concracts\ProductInterface;
use Repository\ProductRepository;

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
            $this->setProductRepository(new ProductRepository());
        }

        return $this->productRepository;
    }

    /**
     * @param ProductInterface $productRepository
     */
    public function setProductRepository(
        ProductInterface $productRepository
    ): void
    {
        $this->productRepository = $productRepository;
    }

}