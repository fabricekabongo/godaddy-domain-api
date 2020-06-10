<?php

namespace GoDaddy\Domain\Api\Model;

class VerificationsDomain
{
    /**
     * 
     *
     * @var VerificationDomainName
     */
    protected $domainName;
    /**
     * 
     *
     * @var VerificationRealName
     */
    protected $realName;
    /**
     * 
     *
     * @return VerificationDomainName
     */
    public function getDomainName() : VerificationDomainName
    {
        return $this->domainName;
    }
    /**
     * 
     *
     * @param VerificationDomainName $domainName
     *
     * @return self
     */
    public function setDomainName(VerificationDomainName $domainName) : self
    {
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * 
     *
     * @return VerificationRealName
     */
    public function getRealName() : VerificationRealName
    {
        return $this->realName;
    }
    /**
     * 
     *
     * @param VerificationRealName $realName
     *
     * @return self
     */
    public function setRealName(VerificationRealName $realName) : self
    {
        $this->realName = $realName;
        return $this;
    }
}