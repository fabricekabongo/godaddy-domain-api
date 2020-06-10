<?php

namespace GoDaddy\Domain\Api\Model;

class JsonDataType
{
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var string
     */
    protected $pattern;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPattern() : string
    {
        return $this->pattern;
    }
    /**
     * 
     *
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(string $pattern) : self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
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