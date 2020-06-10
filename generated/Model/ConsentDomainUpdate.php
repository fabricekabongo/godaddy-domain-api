<?php

namespace GoDaddy\Domain\Api\Model;

class ConsentDomainUpdate
{
    /**
     * Timestamp indicating when the end-user consented to these agreements
     *
     * @var string
     */
    protected $agreedAt;
    /**
     * Originating client IP address of the end-user's computer when they consented to the agreements
     *
     * @var string
     */
    protected $agreedBy;
    /**
     * Unique identifiers of the agreements to which the end-user has agreed, as required by the elements being updated<br/><ul><li><strong style='margin-left: 12px;'>EXPOSE_WHOIS</strong> - Required when the exposeWhois field is updated to true</li></ul>
     *
     * @var string[]
     */
    protected $agreementKeys;
    /**
     * Timestamp indicating when the end-user consented to these agreements
     *
     * @return string
     */
    public function getAgreedAt() : string
    {
        return $this->agreedAt;
    }
    /**
     * Timestamp indicating when the end-user consented to these agreements
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
     * Originating client IP address of the end-user's computer when they consented to the agreements
     *
     * @return string
     */
    public function getAgreedBy() : string
    {
        return $this->agreedBy;
    }
    /**
     * Originating client IP address of the end-user's computer when they consented to the agreements
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
     * Unique identifiers of the agreements to which the end-user has agreed, as required by the elements being updated<br/><ul><li><strong style='margin-left: 12px;'>EXPOSE_WHOIS</strong> - Required when the exposeWhois field is updated to true</li></ul>
     *
     * @return string[]
     */
    public function getAgreementKeys() : array
    {
        return $this->agreementKeys;
    }
    /**
     * Unique identifiers of the agreements to which the end-user has agreed, as required by the elements being updated<br/><ul><li><strong style='margin-left: 12px;'>EXPOSE_WHOIS</strong> - Required when the exposeWhois field is updated to true</li></ul>
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