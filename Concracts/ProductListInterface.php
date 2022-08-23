<?php

namespace Concracts;

interface ProductListInterface
{
    public function convertToXml($array, &$xml);
}