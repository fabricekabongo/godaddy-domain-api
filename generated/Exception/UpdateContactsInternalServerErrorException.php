<?php

namespace GoDaddy\Domain\Api\Exception;

class UpdateContactsInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Internal server error', 500);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}