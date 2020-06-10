<?php

namespace GoDaddy\Domain\Api\Model;

class DomainPurchase
{
    /**
     * 
     *
     * @var Consent
     */
    protected $consent;
    /**
     * 
     *
     * @var Contact
     */
    protected $contactAdmin;
    /**
     * 
     *
     * @var Contact
     */
    protected $contactBilling;
    /**
     * 
     *
     * @var Contact
     */
    protected $contactRegistrant;
    /**
     * 
     *
     * @var Contact
     */
    protected $contactTech;
    /**
     * For internationalized domain names with non-ascii characters, the domain name is converted to punycode before format and pattern validation rules are checked
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string[]
     */
    protected $nameServers;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var bool
     */
    protected $privacy = false;
    /**
     * 
     *
     * @var bool
     */
    protected $renewAuto = true;
    /**
     * 
     *
     * @return Consent
     */
    public function getConsent() : Consent
    {
        return $this->consent;
    }
    /**
     * 
     *
     * @param Consent $consent
     *
     * @return self
     */
    public function setConsent(Consent $consent) : self
    {
        $this->consent = $consent;
        return $this;
    }
    /**
     * 
     *
     * @return Contact
     */
    public function getContactAdmin() : Contact
    {
        return $this->contactAdmin;
    }
    /**
     * 
     *
     * @param Contact $contactAdmin
     *
     * @return self
     */
    public function setContactAdmin(Contact $contactAdmin) : self
    {
        $this->contactAdmin = $contactAdmin;
        return $this;
    }
    /**
     * 
     *
     * @return Contact
     */
    public function getContactBilling() : Contact
    {
        return $this->contactBilling;
    }
    /**
     * 
     *
     * @param Contact $contactBilling
     *
     * @return self
     */
    public function setContactBilling(Contact $contactBilling) : self
    {
        $this->contactBilling = $contactBilling;
        return $this;
    }
    /**
     * 
     *
     * @return Contact
     */
    public function getContactRegistrant() : Contact
    {
        return $this->contactRegistrant;
    }
    /**
     * 
     *
     * @param Contact $contactRegistrant
     *
     * @return self
     */
    public function setContactRegistrant(Contact $contactRegistrant) : self
    {
        $this->contactRegistrant = $contactRegistrant;
        return $this;
    }
    /**
     * 
     *
     * @return Contact
     */
    public function getContactTech() : Contact
    {
        return $this->contactTech;
    }
    /**
     * 
     *
     * @param Contact $contactTech
     *
     * @return self
     */
    public function setContactTech(Contact $contactTech) : self
    {
        $this->contactTech = $contactTech;
        return $this;
    }
    /**
     * For internationalized domain names with non-ascii characters, the domain name is converted to punycode before format and pattern validation rules are checked
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * For internationalized domain names with non-ascii characters, the domain name is converted to punycode before format and pattern validation rules are checked
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
    /**
     * 
     *
     * @return string[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * 
     *
     * @param string[] $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers) : self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivacy() : bool
    {
        return $this->privacy;
    }
    /**
     * 
     *
     * @param bool $privacy
     *
     * @return self
     */
    public function setPrivacy(bool $privacy) : self
    {
        $this->privacy = $privacy;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRenewAuto() : bool
    {
        return $this->renewAuto;
    }
    /**
     * 
     *
     * @param bool $renewAuto
     *
     * @return self
     */
    public function setRenewAuto(bool $renewAuto) : self
    {
        $this->renewAuto = $renewAuto;
        return $this;
    }
}