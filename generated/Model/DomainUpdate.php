<?php

namespace GoDaddy\Domain\Api\Model;

class DomainUpdate
{
    /**
     * Whether or not the domain should be locked to prevent transfers
     *
     * @var bool
     */
    protected $locked;
    /**
     * Fully-qualified domain names for Name Servers to associate with the domain
     *
     * @var mixed[]
     */
    protected $nameServers;
    /**
     * Whether or not the domain should be configured to automatically renew
     *
     * @var bool
     */
    protected $renewAuto;
    /**
     * Reseller subaccount shopperid who can manage the domain
     *
     * @var string
     */
    protected $subaccountId;
    /**
     * Whether or not the domain contact details should be shown in the WHOIS
     *
     * @var bool
     */
    protected $exposeWhois;
    /**
     * 
     *
     * @var ConsentDomainUpdate
     */
    protected $consent;
    /**
     * Whether or not the domain should be locked to prevent transfers
     *
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * Whether or not the domain should be locked to prevent transfers
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked) : self
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * Fully-qualified domain names for Name Servers to associate with the domain
     *
     * @return mixed[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * Fully-qualified domain names for Name Servers to associate with the domain
     *
     * @param mixed[] $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers) : self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * Whether or not the domain should be configured to automatically renew
     *
     * @return bool
     */
    public function getRenewAuto() : bool
    {
        return $this->renewAuto;
    }
    /**
     * Whether or not the domain should be configured to automatically renew
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
    /**
     * Reseller subaccount shopperid who can manage the domain
     *
     * @return string
     */
    public function getSubaccountId() : string
    {
        return $this->subaccountId;
    }
    /**
     * Reseller subaccount shopperid who can manage the domain
     *
     * @param string $subaccountId
     *
     * @return self
     */
    public function setSubaccountId(string $subaccountId) : self
    {
        $this->subaccountId = $subaccountId;
        return $this;
    }
    /**
     * Whether or not the domain contact details should be shown in the WHOIS
     *
     * @return bool
     */
    public function getExposeWhois() : bool
    {
        return $this->exposeWhois;
    }
    /**
     * Whether or not the domain contact details should be shown in the WHOIS
     *
     * @param bool $exposeWhois
     *
     * @return self
     */
    public function setExposeWhois(bool $exposeWhois) : self
    {
        $this->exposeWhois = $exposeWhois;
        return $this;
    }
    /**
     * 
     *
     * @return ConsentDomainUpdate
     */
    public function getConsent() : ConsentDomainUpdate
    {
        return $this->consent;
    }
    /**
     * 
     *
     * @param ConsentDomainUpdate $consent
     *
     * @return self
     */
    public function setConsent(ConsentDomainUpdate $consent) : self
    {
        $this->consent = $consent;
        return $this;
    }
}