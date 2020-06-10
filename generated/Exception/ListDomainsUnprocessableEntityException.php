<?php

namespace GoDaddy\Domain\Api\Exception;

class ListDomainsUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Limit must have a value no greater than 1000', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}