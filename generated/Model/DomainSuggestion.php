<?php

namespace GoDaddy\Domain\Api\Model;

class DomainSuggestion
{
    /**
     * Suggested domain name
     *
     * @var string
     */
    protected $domain;
    /**
     * Suggested domain name
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * Suggested domain name
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
}