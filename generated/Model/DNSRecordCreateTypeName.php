<?php

namespace GoDaddy\Domain\Api\Model;

class DNSRecordCreateTypeName
{
    /**
     * 
     *
     * @var string
     */
    protected $data;
    /**
     * Service port (SRV only)
     *
     * @var int
     */
    protected $port;
    /**
     * Record priority (MX and SRV only)
     *
     * @var int
     */
    protected $priority;
    /**
     * Service protocol (SRV only)
     *
     * @var string
     */
    protected $protocol;
    /**
     * Service type (SRV only)
     *
     * @var string
     */
    protected $service;
    /**
     * 
     *
     * @var int
     */
    protected $ttl;
    /**
     * Record weight (SRV only)
     *
     * @var int
     */
    protected $weight;
    /**
     * 
     *
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Service port (SRV only)
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * Service port (SRV only)
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * Record priority (MX and SRV only)
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * Record priority (MX and SRV only)
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Service protocol (SRV only)
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * Service protocol (SRV only)
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Service type (SRV only)
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * Service type (SRV only)
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->service = $service;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTtl() : int
    {
        return $this->ttl;
    }
    /**
     * 
     *
     * @param int $ttl
     *
     * @return self
     */
    public function setTtl(int $ttl) : self
    {
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * Record weight (SRV only)
     *
     * @return int
     */
    public function getWeight() : int
    {
        return $this->weight;
    }
    /**
     * Record weight (SRV only)
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
}