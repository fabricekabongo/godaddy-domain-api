<?php

namespace GoDaddy\Domain\Api\Exception;

class UpdateUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('At least two apex (aka @) `nameServers` must be specified<br>Failed to update nameservers', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}