<?php

namespace GoDaddy\Domain\Api\Exception;

class PurchaseUnauthorizedException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Authentication info not sent or invalid', 401);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}