<?php

namespace GoDaddy\Domain\Api\Model;

class Contact
{
    /**
     * 
     *
     * @var Address
     */
    protected $addressMailing;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $fax;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var string
     */
    protected $nameFirst;
    /**
     * 
     *
     * @var string
     */
    protected $nameLast;
    /**
     * 
     *
     * @var string
     */
    protected $nameMiddle;
    /**
     * 
     *
     * @var string
     */
    protected $organization;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @return Address
     */
    public function getAddressMailing() : Address
    {
        return $this->addressMailing;
    }
    /**
     * 
     *
     * @param Address $addressMailing
     *
     * @return self
     */
    public function setAddressMailing(Address $addressMailing) : self
    {
        $this->addressMailing = $addressMailing;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobTitle() : string
    {
        return $this->jobTitle;
    }
    /**
     * 
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle) : self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNameFirst() : string
    {
        return $this->nameFirst;
    }
    /**
     * 
     *
     * @param string $nameFirst
     *
     * @return self
     */
    public function setNameFirst(string $nameFirst) : self
    {
        $this->nameFirst = $nameFirst;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNameLast() : string
    {
        return $this->nameLast;
    }
    /**
     * 
     *
     * @param string $nameLast
     *
     * @return self
     */
    public function setNameLast(string $nameLast) : self
    {
        $this->nameLast = $nameLast;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNameMiddle() : string
    {
        return $this->nameMiddle;
    }
    /**
     * 
     *
     * @param string $nameMiddle
     *
     * @return self
     */
    public function setNameMiddle(string $nameMiddle) : self
    {
        $this->nameMiddle = $nameMiddle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
}