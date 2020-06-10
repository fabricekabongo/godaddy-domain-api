<?php

namespace GoDaddy\Domain\Api\Model;

class DomainPurchaseResponse
{
    /**
     * Currency in which the `total` is listed
     *
     * @var string
     */
    protected $currency = 'USD';
    /**
     * Number items included in the order
     *
     * @var int
     */
    protected $itemCount;
    /**
     * Unique identifier of the order processed to purchase the domain
     *
     * @var int
     */
    protected $orderId;
    /**
     * Total cost of the domain and any selected add-ons
     *
     * @var int
     */
    protected $total;
    /**
     * Currency in which the `total` is listed
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Currency in which the `total` is listed
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
     * Number items included in the order
     *
     * @return int
     */
    public function getItemCount() : int
    {
        return $this->itemCount;
    }
    /**
     * Number items included in the order
     *
     * @param int $itemCount
     *
     * @return self
     */
    public function setItemCount(int $itemCount) : self
    {
        $this->itemCount = $itemCount;
        return $this;
    }
    /**
     * Unique identifier of the order processed to purchase the domain
     *
     * @return int
     */
    public function getOrderId() : int
    {
        return $this->orderId;
    }
    /**
     * Unique identifier of the order processed to purchase the domain
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Total cost of the domain and any selected add-ons
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * Total cost of the domain and any selected add-ons
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}