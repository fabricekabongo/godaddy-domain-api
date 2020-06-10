<?php

namespace GoDaddy\Domain\Api\Exception;

class SchemaForbiddenException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Authenticated user is not allowed access', 403);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}