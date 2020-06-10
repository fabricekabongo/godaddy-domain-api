<?php

namespace GoDaddy\Domain\Api\Model;

class TldSummary
{
    /**
     * Name of the top-level domain
     *
     * @var string
     */
    protected $name;
    /**
     * Type of the top-level domain
     *
     * @var string
     */
    protected $type = 'GENERIC';
    /**
     * Name of the top-level domain
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the top-level domain
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Type of the top-level domain
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of the top-level domain
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}