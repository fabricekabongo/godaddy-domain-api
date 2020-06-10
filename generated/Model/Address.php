<?php

namespace GoDaddy\Domain\Api\Model;

class Address
{
    /**
     * 
     *
     * @var string
     */
    protected $address1;
    /**
     * 
     *
     * @var string
     */
    protected $address2;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
    * Two-letter ISO country code to be used as a hint for target region<br/><br/>
    NOTE: These are sample values, there are many
    <a href='http://www.iso.org/iso/country_codes.htm'>more</a>
    *
    * @var string
    */
    protected $country = 'US';
    /**
     * Postal or zip code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * State or province or territory
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @return string
     */
    public function getAddress1() : string
    {
        return $this->address1;
    }
    /**
     * 
     *
     * @param string $address1
     *
     * @return self
     */
    public function setAddress1(string $address1) : self
    {
        $this->address1 = $address1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAddress2() : string
    {
        return $this->address2;
    }
    /**
     * 
     *
     * @param string $address2
     *
     * @return self
     */
    public function setAddress2(string $address2) : self
    {
        $this->address2 = $address2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
    * Two-letter ISO country code to be used as a hint for target region<br/><br/>
    NOTE: These are sample values, there are many
    <a href='http://www.iso.org/iso/country_codes.htm'>more</a>
    *
    * @return string
    */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
    * Two-letter ISO country code to be used as a hint for target region<br/><br/>
    NOTE: These are sample values, there are many
    <a href='http://www.iso.org/iso/country_codes.htm'>more</a>
    *
    * @param string $country
    *
    * @return self
    */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Postal or zip code
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal or zip code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * State or province or territory
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State or province or territory
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
}