<?php

namespace GoDaddy\Domain\Api\Exception;

class SuggestBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Request was malformed', 400);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}