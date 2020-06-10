<?php

namespace GoDaddy\Domain\Api\Model;

class DomainsContactsBulk
{
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
    protected $contactPresence;
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
     * An array of domain names to be validated against. Alternatively, you can specify the extracted tlds. However, full domain names are required if the tld is `uk`
     *
     * @var string[]
     */
    protected $domains;
    /**
     * Canadian Presence Requirement (CA)
     *
     * @var string
     */
    protected $entityType;
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
    public function getContactPresence() : Contact
    {
        return $this->contactPresence;
    }
    /**
     * 
     *
     * @param Contact $contactPresence
     *
     * @return self
     */
    public function setContactPresence(Contact $contactPresence) : self
    {
        $this->contactPresence = $contactPresence;
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
     * An array of domain names to be validated against. Alternatively, you can specify the extracted tlds. However, full domain names are required if the tld is `uk`
     *
     * @return string[]
     */
    public function getDomains() : array
    {
        return $this->domains;
    }
    /**
     * An array of domain names to be validated against. Alternatively, you can specify the extracted tlds. However, full domain names are required if the tld is `uk`
     *
     * @param string[] $domains
     *
     * @return self
     */
    public function setDomains(array $domains) : self
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * Canadian Presence Requirement (CA)
     *
     * @return string
     */
    public function getEntityType() : string
    {
        return $this->entityType;
    }
    /**
     * Canadian Presence Requirement (CA)
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType) : self
    {
        $this->entityType = $entityType;
        return $this;
    }
}