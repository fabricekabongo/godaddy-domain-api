<?php

namespace GoDaddy\Domain\Api\Exception;

class VerifyEmailUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('`domain` is not a valid Domain name', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}