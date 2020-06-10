<?php

namespace GoDaddy\Domain\Api\Exception;

class RenewTooManyRequestsException extends \RuntimeException implements ClientException
{
    private $errorLimit;
    public function __construct(\GoDaddy\Domain\Api\Model\ErrorLimit $errorLimit)
    {
        parent::__construct('Too many requests received within interval', 429);
        $this->errorLimit = $errorLimit;
    }
    public function getErrorLimit()
    {
        return $this->errorLimit;
    }
}