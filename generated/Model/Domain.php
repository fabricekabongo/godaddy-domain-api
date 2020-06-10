<?php

namespace GoDaddy\Domain\Api\Model;

class Domain
{
    /**
     * 
     *
     * @var float
     */
    protected $id;
    /**
     * 
     *
     * @return float
     */
    public function getId() : float
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param float $id
     *
     * @return self
     */
    public function setId(float $id) : self
    {
        $this->id = $id;
        return $this;
    }
}