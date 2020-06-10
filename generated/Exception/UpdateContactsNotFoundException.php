<?php

namespace GoDaddy\Domain\Api\Exception;

class UpdateContactsNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Domain not found<br>Identity document not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}