<?php

namespace GoDaddy\Domain\Api\Model;

class JsonSchema
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var JsonSchemaModels
     */
    protected $models;
    /**
     * 
     *
     * @var JsonSchemaProperties
     */
    protected $properties;
    /**
     * 
     *
     * @var string[]
     */
    protected $required;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchemaModels
     */
    public function getModels() : JsonSchemaModels
    {
        return $this->models;
    }
    /**
     * 
     *
     * @param JsonSchemaModels $models
     *
     * @return self
     */
    public function setModels(JsonSchemaModels $models) : self
    {
        $this->models = $models;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchemaProperties
     */
    public function getProperties() : JsonSchemaProperties
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param JsonSchemaProperties $properties
     *
     * @return self
     */
    public function setProperties(JsonSchemaProperties $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRequired() : array
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param string[] $required
     *
     * @return self
     */
    public function setRequired(array $required) : self
    {
        $this->required = $required;
        return $this;
    }
}