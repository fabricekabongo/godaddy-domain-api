<?php

namespace GoDaddy\Domain\Api\Exception;

class ContactsValidateUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $errorDomainContactsValidate;
    public function __construct(\GoDaddy\Domain\Api\Model\ErrorDomainContactsValidate $errorDomainContactsValidate)
    {
        parent::__construct('Request body doesn\'t fulfill schema, see details in `fields`', 422);
        $this->errorDomainContactsValidate = $errorDomainContactsValidate;
    }
    public function getErrorDomainContactsValidate()
    {
        return $this->errorDomainContactsValidate;
    }
}