<?php

namespace GoDaddy\Domain\Api\Model;

class Consent
{
    /**
     * Timestamp indicating when the end-user consented to these legal agreements
     *
     * @var string
     */
    protected $agreedAt;
    /**
     * Originating client IP address of the end-user's computer when they consented to these legal agreements
     *
     * @var string
     */
    protected $agreedBy;
    /**
     * Unique identifiers of the legal agreements to which the end-user has agreed, as returned from the/domains/agreements endpoint
     *
     * @var string[]
     */
    protected $agreementKeys;
    /**
     * Timestamp indicating when the end-user consented to these legal agreements
     *
     * @return string
     */
    public function getAgreedAt() : string
    {
        return $this->agreedAt;
    }
    /**
     * Timestamp indicating when the end-user consented to these legal agreements
     *
     * @param string $agreedAt
     *
     * @return self
     */
    public function setAgreedAt(string $agreedAt) : self
    {
        $this->agreedAt = $agreedAt;
        return $this;
    }
    /**
     * Originating client IP address of the end-user's computer when they consented to these legal agreements
     *
     * @return string
     */
    public function getAgreedBy() : string
    {
        return $this->agreedBy;
    }
    /**
     * Originating client IP address of the end-user's computer when they consented to these legal agreements
     *
     * @param string $agreedBy
     *
     * @return self
     */
    public function setAgreedBy(string $agreedBy) : self
    {
        $this->agreedBy = $agreedBy;
        return $this;
    }
    /**
     * Unique identifiers of the legal agreements to which the end-user has agreed, as returned from the/domains/agreements endpoint
     *
     * @return string[]
     */
    public function getAgreementKeys() : array
    {
        return $this->agreementKeys;
    }
    /**
     * Unique identifiers of the legal agreements to which the end-user has agreed, as returned from the/domains/agreements endpoint
     *
     * @param string[] $agreementKeys
     *
     * @return self
     */
    public function setAgreementKeys(array $agreementKeys) : self
    {
        $this->agreementKeys = $agreementKeys;
        return $this;
    }
}