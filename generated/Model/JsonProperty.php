<?php

namespace GoDaddy\Domain\Api\Model;

class JsonProperty
{
    /**
     * 
     *
     * @var string
     */
    protected $defaultValue;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var JsonPropertyItems
     */
    protected $items;
    /**
     * 
     *
     * @var int
     */
    protected $maxItems;
    /**
     * 
     *
     * @var int
     */
    protected $maximum;
    /**
     * 
     *
     * @var int
     */
    protected $minItems;
    /**
     * 
     *
     * @var int
     */
    protected $minimum;
    /**
     * 
     *
     * @var string
     */
    protected $pattern;
    /**
     * 
     *
     * @var bool
     */
    protected $required;
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
    public function getDefaultValue() : string
    {
        return $this->defaultValue;
    }
    /**
     * 
     *
     * @param string $defaultValue
     *
     * @return self
     */
    public function setDefaultValue(string $defaultValue) : self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }
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
     * @return JsonPropertyItems
     */
    public function getItems() : JsonPropertyItems
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JsonPropertyItems $items
     *
     * @return self
     */
    public function setItems(JsonPropertyItems $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxItems() : int
    {
        return $this->maxItems;
    }
    /**
     * 
     *
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems(int $maxItems) : self
    {
        $this->maxItems = $maxItems;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaximum() : int
    {
        return $this->maximum;
    }
    /**
     * 
     *
     * @param int $maximum
     *
     * @return self
     */
    public function setMaximum(int $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinItems() : int
    {
        return $this->minItems;
    }
    /**
     * 
     *
     * @param int $minItems
     *
     * @return self
     */
    public function setMinItems(int $minItems) : self
    {
        $this->minItems = $minItems;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinimum() : int
    {
        return $this->minimum;
    }
    /**
     * 
     *
     * @param int $minimum
     *
     * @return self
     */
    public function setMinimum(int $minimum) : self
    {
        $this->minimum = $minimum;
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
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
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