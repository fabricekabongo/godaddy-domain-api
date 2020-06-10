<?php

namespace GoDaddy\Domain\Api\Model;

class DomainContacts
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
    protected $contactRegistrant;
    /**
     * 
     *
     * @var Contact
     */
    protected $contactTech;
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