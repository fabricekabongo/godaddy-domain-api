<?php

namespace GoDaddy\Domain\Api\Model;

class DomainAvailableBulkMixed
{
    /**
     * Domain available response array
     *
     * @var DomainAvailableResponse[]
     */
    protected $domains;
    /**
     * Errors encountered while performing a domain available check
     *
     * @var DomainAvailableError[]
     */
    protected $errors;
    /**
     * Domain available response array
     *
     * @return DomainAvailableResponse[]
     */
    public function getDomains() : array
    {
        return $this->domains;
    }
    /**
     * Domain available response array
     *
     * @param DomainAvailableResponse[] $domains
     *
     * @return self
     */
    public function setDomains(array $domains) : self
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * Errors encountered while performing a domain available check
     *
     * @return DomainAvailableError[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * Errors encountered while performing a domain available check
     *
     * @param DomainAvailableError[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}