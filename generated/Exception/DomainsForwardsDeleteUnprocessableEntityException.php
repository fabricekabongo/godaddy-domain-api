<?php

namespace GoDaddy\Domain\Api\Exception;

class DomainsForwardsDeleteUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('A valid `fqdn` must be specified', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}