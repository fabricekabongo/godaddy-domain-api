<?php

namespace GoDaddy\Domain\Api\Exception;

class PurchasePrivacyUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('End-user must read and consent to all of the following legal agreements<br>`domain` must match `sld.tld`', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}