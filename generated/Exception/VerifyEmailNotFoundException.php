<?php

namespace GoDaddy\Domain\Api\Exception;

class VerifyEmailNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Resource not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}