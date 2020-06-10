<?php

namespace GoDaddy\Domain\Api\Model;

class DomainAvailableResponse
{
    /**
     * Whether or not the domain name is available
     *
     * @var bool
     */
    protected $available;
    /**
     * Currency in which the `price` is listed. Only returned if tld is offered
     *
     * @var string
     */
    protected $currency = 'USD';
    /**
     * Whether or not the `available` answer has been definitively verified with the registry
     *
     * @var bool
     */
    protected $definitive;
    /**
     * Domain name
     *
     * @var string
     */
    protected $domain;
    /**
     * Number of years included in the price. Only returned if tld is offered
     *
     * @var int
     */
    protected $period;
    /**
     * Price of the domain excluding taxes or fees. Only returned if tld is offered
     *
     * @var int
     */
    protected $price;
    /**
     * Whether or not the domain name is available
     *
     * @return bool
     */
    public function getAvailable() : bool
    {
        return $this->available;
    }
    /**
     * Whether or not the domain name is available
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(bool $available) : self
    {
        $this->available = $available;
        return $this;
    }
    /**
     * Currency in which the `price` is listed. Only returned if tld is offered
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Currency in which the `price` is listed. Only returned if tld is offered
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Whether or not the `available` answer has been definitively verified with the registry
     *
     * @return bool
     */
    public function getDefinitive() : bool
    {
        return $this->definitive;
    }
    /**
     * Whether or not the `available` answer has been definitively verified with the registry
     *
     * @param bool $definitive
     *
     * @return self
     */
    public function setDefinitive(bool $definitive) : self
    {
        $this->definitive = $definitive;
        return $this;
    }
    /**
     * Domain name
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * Domain name
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
     * Number of years included in the price. Only returned if tld is offered
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * Number of years included in the price. Only returned if tld is offered
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
     * Price of the domain excluding taxes or fees. Only returned if tld is offered
     *
     * @return int
     */
    public function getPrice() : int
    {
        return $this->price;
    }
    /**
     * Price of the domain excluding taxes or fees. Only returned if tld is offered
     *
     * @param int $price
     *
     * @return self
     */
    public function setPrice(int $price) : self
    {
        $this->price = $price;
        return $this;
    }
}