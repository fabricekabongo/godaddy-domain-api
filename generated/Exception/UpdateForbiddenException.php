<?php

namespace GoDaddy\Domain\Api\Exception;

class UpdateForbiddenException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Specified Subaccount not owned by authenticated Shopper', 403);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}