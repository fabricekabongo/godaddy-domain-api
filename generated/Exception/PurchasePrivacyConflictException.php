<?php

namespace GoDaddy\Domain\Api\Exception;

class PurchasePrivacyConflictException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('The domain status does not allow performing the operation', 409);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}