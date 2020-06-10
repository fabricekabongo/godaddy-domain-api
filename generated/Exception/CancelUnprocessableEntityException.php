<?php

namespace GoDaddy\Domain\Api\Exception;

class CancelUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Unknown domain error<br>At least two apex (aka @) `nameServers` must be specified', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}