<?php

namespace Trait;

require_once ('../Service/ConvertXmlService.php');

use src\Service\ConvertXmlService;

trait ConvertXmlServiceTrait
{
    /** @var ConvertXmlService $convertXmlService */
    private $convertXmlService;

    public function getConvertXmlService(): ConvertXmlService
    {
        if (!$this->convertXmlService) {
            $this->convertXmlService = new ConvertXmlService();
        }

        return $this->convertXmlService;
    }
}