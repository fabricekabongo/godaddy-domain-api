<?php

namespace GoDaddy\Domain\Api\Exception;

class CancelNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('The domain does not exist', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}