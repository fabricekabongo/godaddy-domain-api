<?php

namespace GoDaddy\Domain\Api\Exception;

class PurchaseUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('domain must be specified<br>Based on restrictions declared in JSON schema returned by `./schema/{tld}`<br>Cannot convert domain label error<br>Domain is missing IDN script<br>Domain segment ends with dash<br>Domain starts with dash<br>Domain uses unsupported IDN script<br>FQDN fails generic validity regex<br>Invalid character(s) error<br>Invalid tld error<br>Non-IDN domain name must not have dashes at the third and fourth position<br>Reserved name error<br>`body` must be specified', 422);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}