<?php

namespace GoDaddy\Domain\Api\Model;

class DomainTransferIn
{
    /**
     * Authorization code from registrar for transferring a domain
     *
     * @var string
     */
    protected $authCode;
    /**
     * 
     *
     * @var Consent
     */
    protected $consent;
    /**
     * Can be more than 1 but no more than 10 years total including current registration length
     *
     * @var int
     */
    protected $period;
    /**
     * Whether or not privacy has been requested
     *
     * @var bool
     */
    protected $privacy = false;
    /**
     * Whether or not the domain should be configured to automatically renew
     *
     * @var bool
     */
    protected $renewAuto = true;
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
     * Authorization code from registrar for transferring a domain
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * Authorization code from registrar for transferring a domain
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode(string $authCode) : self
    {
        $this->authCode = $authCode;
        return $this;
    }
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
     * Can be more than 1 but no more than 10 years total including current registration length
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * Can be more than 1 but no more than 10 years total including current registration length
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
     * Whether or not privacy has been requested
     *
     * @return bool
     */
    public function getPrivacy() : bool
    {
        return $this->privacy;
    }
    /**
     * Whether or not privacy has been requested
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
}