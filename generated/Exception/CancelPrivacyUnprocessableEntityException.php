<?php

namespace GoDaddy\Domain\Api\Exception;

class CancelPrivacyUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Customer has purchased Domain Ownership Protection and the domain has expired<br>The domain status does not allow performing the operation<br>Unknown domain error', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}