<?php

namespace GoDaddy\Domain\Api\Model;

class DomainSummary
{
    /**
     * Authorization code for transferring the Domain
     *
     * @var string
     */
    protected $authCode;
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
     * Date and time when this domain was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time when this domain was deleted
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * Date and time when this domain is eligible to transfer
     *
     * @var \DateTime
     */
    protected $transferAwayEligibleAt;
    /**
     * Name of the domain
     *
     * @var string
     */
    protected $domain;
    /**
     * Unique identifier for this Domain
     *
     * @var float
     */
    protected $domainId;
    /**
     * Whether or not the domain is protected from expiration
     *
     * @var bool
     */
    protected $expirationProtected;
    /**
     * Date and time when this domain will expire
     *
     * @var \DateTime
     */
    protected $expires;
    /**
     * Whether or not the domain contact details should be shown in the WHOIS
     *
     * @var bool
     */
    protected $exposeWhois;
    /**
     * Whether or not the domain is on-hold by the registrar
     *
     * @var bool
     */
    protected $holdRegistrar;
    /**
     * Whether or not the domain is locked to prevent transfers
     *
     * @var bool
     */
    protected $locked;
    /**
     * Fully-qualified domain names for DNS servers
     *
     * @var string[]
     */
    protected $nameServers;
    /**
     * Whether or not the domain has privacy protection
     *
     * @var bool
     */
    protected $privacy;
    /**
     * Whether or not the domain is configured to automatically renew
     *
     * @var bool
     */
    protected $renewAuto;
    /**
     * Date the domain must renew on
     *
     * @var \DateTime
     */
    protected $renewDeadline;
    /**
     * Whether or not the domain is eligble for renewal based on status
     *
     * @var bool
     */
    protected $renewable;
    /**
    * Processing status of the domain<br/><ul>
    <li><strong style='margin-left: 12px;'>ACTIVE</strong> - All is well</li>
    <li><strong style='margin-left: 12px;'>AWAITING*</strong> - System is waiting for the end-user to complete an action</li>
    <li><strong style='margin-left: 12px;'>CANCELLED*</strong> - Domain has been cancelled, and may or may not be reclaimable</li>
    <li><strong style='margin-left: 12px;'>CONFISCATED</strong> - Domain has been confiscated, usually for abuse, chargeback, or fraud</li>
    <li><strong style='margin-left: 12px;'>DISABLED*</strong> - Domain has been disabled</li>
    <li><strong style='margin-left: 12px;'>EXCLUDED*</strong> - Domain has been excluded from Firehose registration</li>
    <li><strong style='margin-left: 12px;'>EXPIRED*</strong> - Domain has expired</li>
    <li><strong style='margin-left: 12px;'>FAILED*</strong> - Domain has failed a required action, and the system is no longer retrying</li>
    <li><strong style='margin-left: 12px;'>HELD*</strong> - Domain has been placed on hold, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>LOCKED*</strong> - Domain has been locked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PARKED*</strong> - Domain has been parked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PENDING*</strong> - Domain is working its way through an automated workflow</li>
    <li><strong style='margin-left: 12px;'>RESERVED*</strong> - Domain is reserved, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>REVERTED</strong> - Domain has been reverted, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>SUSPENDED*</strong> - Domain has been suspended, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>TRANSFERRED*</strong> - Domain has been transferred out</li>
    <li><strong style='margin-left: 12px;'>UNKNOWN</strong> - Domain is in an unknown state</li>
    <li><strong style='margin-left: 12px;'>UNLOCKED*</strong> - Domain has been unlocked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UNPARKED*</strong> - Domain has been unparked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UPDATED*</strong> - Domain ownership has been transferred to another account</li>
    </ul>
    *
    * @var string
    */
    protected $status;
    /**
     * Whether or not the domain is protected from transfer
     *
     * @var bool
     */
    protected $transferProtected;
    /**
     * Authorization code for transferring the Domain
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * Authorization code for transferring the Domain
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
     * Date and time when this domain was created
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time when this domain was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time when this domain was deleted
     *
     * @return \DateTime
     */
    public function getDeletedAt() : \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * Date and time when this domain was deleted
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt) : self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Date and time when this domain is eligible to transfer
     *
     * @return \DateTime
     */
    public function getTransferAwayEligibleAt() : \DateTime
    {
        return $this->transferAwayEligibleAt;
    }
    /**
     * Date and time when this domain is eligible to transfer
     *
     * @param \DateTime $transferAwayEligibleAt
     *
     * @return self
     */
    public function setTransferAwayEligibleAt(\DateTime $transferAwayEligibleAt) : self
    {
        $this->transferAwayEligibleAt = $transferAwayEligibleAt;
        return $this;
    }
    /**
     * Name of the domain
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * Name of the domain
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
     * Unique identifier for this Domain
     *
     * @return float
     */
    public function getDomainId() : float
    {
        return $this->domainId;
    }
    /**
     * Unique identifier for this Domain
     *
     * @param float $domainId
     *
     * @return self
     */
    public function setDomainId(float $domainId) : self
    {
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Whether or not the domain is protected from expiration
     *
     * @return bool
     */
    public function getExpirationProtected() : bool
    {
        return $this->expirationProtected;
    }
    /**
     * Whether or not the domain is protected from expiration
     *
     * @param bool $expirationProtected
     *
     * @return self
     */
    public function setExpirationProtected(bool $expirationProtected) : self
    {
        $this->expirationProtected = $expirationProtected;
        return $this;
    }
    /**
     * Date and time when this domain will expire
     *
     * @return \DateTime
     */
    public function getExpires() : \DateTime
    {
        return $this->expires;
    }
    /**
     * Date and time when this domain will expire
     *
     * @param \DateTime $expires
     *
     * @return self
     */
    public function setExpires(\DateTime $expires) : self
    {
        $this->expires = $expires;
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
     * Whether or not the domain is on-hold by the registrar
     *
     * @return bool
     */
    public function getHoldRegistrar() : bool
    {
        return $this->holdRegistrar;
    }
    /**
     * Whether or not the domain is on-hold by the registrar
     *
     * @param bool $holdRegistrar
     *
     * @return self
     */
    public function setHoldRegistrar(bool $holdRegistrar) : self
    {
        $this->holdRegistrar = $holdRegistrar;
        return $this;
    }
    /**
     * Whether or not the domain is locked to prevent transfers
     *
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * Whether or not the domain is locked to prevent transfers
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
     * Fully-qualified domain names for DNS servers
     *
     * @return string[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * Fully-qualified domain names for DNS servers
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
     * Whether or not the domain has privacy protection
     *
     * @return bool
     */
    public function getPrivacy() : bool
    {
        return $this->privacy;
    }
    /**
     * Whether or not the domain has privacy protection
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
     * Whether or not the domain is configured to automatically renew
     *
     * @return bool
     */
    public function getRenewAuto() : bool
    {
        return $this->renewAuto;
    }
    /**
     * Whether or not the domain is configured to automatically renew
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
     * Date the domain must renew on
     *
     * @return \DateTime
     */
    public function getRenewDeadline() : \DateTime
    {
        return $this->renewDeadline;
    }
    /**
     * Date the domain must renew on
     *
     * @param \DateTime $renewDeadline
     *
     * @return self
     */
    public function setRenewDeadline(\DateTime $renewDeadline) : self
    {
        $this->renewDeadline = $renewDeadline;
        return $this;
    }
    /**
     * Whether or not the domain is eligble for renewal based on status
     *
     * @return bool
     */
    public function getRenewable() : bool
    {
        return $this->renewable;
    }
    /**
     * Whether or not the domain is eligble for renewal based on status
     *
     * @param bool $renewable
     *
     * @return self
     */
    public function setRenewable(bool $renewable) : self
    {
        $this->renewable = $renewable;
        return $this;
    }
    /**
    * Processing status of the domain<br/><ul>
    <li><strong style='margin-left: 12px;'>ACTIVE</strong> - All is well</li>
    <li><strong style='margin-left: 12px;'>AWAITING*</strong> - System is waiting for the end-user to complete an action</li>
    <li><strong style='margin-left: 12px;'>CANCELLED*</strong> - Domain has been cancelled, and may or may not be reclaimable</li>
    <li><strong style='margin-left: 12px;'>CONFISCATED</strong> - Domain has been confiscated, usually for abuse, chargeback, or fraud</li>
    <li><strong style='margin-left: 12px;'>DISABLED*</strong> - Domain has been disabled</li>
    <li><strong style='margin-left: 12px;'>EXCLUDED*</strong> - Domain has been excluded from Firehose registration</li>
    <li><strong style='margin-left: 12px;'>EXPIRED*</strong> - Domain has expired</li>
    <li><strong style='margin-left: 12px;'>FAILED*</strong> - Domain has failed a required action, and the system is no longer retrying</li>
    <li><strong style='margin-left: 12px;'>HELD*</strong> - Domain has been placed on hold, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>LOCKED*</strong> - Domain has been locked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PARKED*</strong> - Domain has been parked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PENDING*</strong> - Domain is working its way through an automated workflow</li>
    <li><strong style='margin-left: 12px;'>RESERVED*</strong> - Domain is reserved, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>REVERTED</strong> - Domain has been reverted, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>SUSPENDED*</strong> - Domain has been suspended, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>TRANSFERRED*</strong> - Domain has been transferred out</li>
    <li><strong style='margin-left: 12px;'>UNKNOWN</strong> - Domain is in an unknown state</li>
    <li><strong style='margin-left: 12px;'>UNLOCKED*</strong> - Domain has been unlocked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UNPARKED*</strong> - Domain has been unparked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UPDATED*</strong> - Domain ownership has been transferred to another account</li>
    </ul>
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Processing status of the domain<br/><ul>
    <li><strong style='margin-left: 12px;'>ACTIVE</strong> - All is well</li>
    <li><strong style='margin-left: 12px;'>AWAITING*</strong> - System is waiting for the end-user to complete an action</li>
    <li><strong style='margin-left: 12px;'>CANCELLED*</strong> - Domain has been cancelled, and may or may not be reclaimable</li>
    <li><strong style='margin-left: 12px;'>CONFISCATED</strong> - Domain has been confiscated, usually for abuse, chargeback, or fraud</li>
    <li><strong style='margin-left: 12px;'>DISABLED*</strong> - Domain has been disabled</li>
    <li><strong style='margin-left: 12px;'>EXCLUDED*</strong> - Domain has been excluded from Firehose registration</li>
    <li><strong style='margin-left: 12px;'>EXPIRED*</strong> - Domain has expired</li>
    <li><strong style='margin-left: 12px;'>FAILED*</strong> - Domain has failed a required action, and the system is no longer retrying</li>
    <li><strong style='margin-left: 12px;'>HELD*</strong> - Domain has been placed on hold, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>LOCKED*</strong> - Domain has been locked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PARKED*</strong> - Domain has been parked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>PENDING*</strong> - Domain is working its way through an automated workflow</li>
    <li><strong style='margin-left: 12px;'>RESERVED*</strong> - Domain is reserved, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>REVERTED</strong> - Domain has been reverted, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>SUSPENDED*</strong> - Domain has been suspended, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>TRANSFERRED*</strong> - Domain has been transferred out</li>
    <li><strong style='margin-left: 12px;'>UNKNOWN</strong> - Domain is in an unknown state</li>
    <li><strong style='margin-left: 12px;'>UNLOCKED*</strong> - Domain has been unlocked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UNPARKED*</strong> - Domain has been unparked, and likely requires intervention from Support</li>
    <li><strong style='margin-left: 12px;'>UPDATED*</strong> - Domain ownership has been transferred to another account</li>
    </ul>
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
    /**
     * Whether or not the domain is protected from transfer
     *
     * @return bool
     */
    public function getTransferProtected() : bool
    {
        return $this->transferProtected;
    }
    /**
     * Whether or not the domain is protected from transfer
     *
     * @param bool $transferProtected
     *
     * @return self
     */
    public function setTransferProtected(bool $transferProtected) : self
    {
        $this->transferProtected = $transferProtected;
        return $this;
    }
}