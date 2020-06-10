<?php

namespace GoDaddy\Domain\Api\Exception;

class ValidateUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Based on restrictions declared in JSON schema returned by `./schema/{tld}`', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}