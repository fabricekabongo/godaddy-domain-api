<?php

namespace GoDaddy\Domain\Api\Exception;

class RecordReplaceUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('`domain` is not a valid Domain name<br>`record` does not fulfill the schema', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}