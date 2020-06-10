<?php

namespace GoDaddy\Domain\Api\Model;

class PrivacyPurchase
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
}