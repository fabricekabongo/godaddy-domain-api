<?php

namespace GoDaddy\Domain\Api\Model;

class VerificationDomainName
{
    /**
     * Status of the domain name verification
     *
     * @var string
     */
    protected $status;
    /**
     * Status of the domain name verification
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status of the domain name verification
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
}