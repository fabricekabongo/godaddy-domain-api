<?php

namespace GoDaddy\Domain\Api\Exception;

class TransferInConflictException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('`domain` (domain) isn\'t available for transfer', 409);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}