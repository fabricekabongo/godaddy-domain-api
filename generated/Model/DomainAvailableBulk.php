<?php

namespace GoDaddy\Domain\Api\Model;

class DomainAvailableBulk
{
    /**
     * Domain available response array
     *
     * @var DomainAvailableResponse[]
     */
    protected $domains;
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
}