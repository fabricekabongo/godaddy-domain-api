<?php

namespace GoDaddy\Domain\Api\Exception;

class DomainsForwardsPutUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Request body doesn\'t fulfill schema, see details in `fields`', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}