<?php

namespace GoDaddy\Domain\Api\Exception;

class UpdateConflictException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('The given domain is not eligible to have its nameservers changed', 409);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}