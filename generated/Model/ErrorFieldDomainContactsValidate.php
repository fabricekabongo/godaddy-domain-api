<?php

namespace GoDaddy\Domain\Api\Model;

class ErrorFieldDomainContactsValidate
{
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @var string
     */
    protected $code;
    /**
     * An array of domain names the error is for. If tlds are specified in the request, `domains` will contain tlds. For example, if `domains` in request is ["test1.com", "test2.uk", "net"], and the field is invalid for com and net, then one of the `fields` in response will have ["test1.com", "net"] as `domains`
     *
     * @var string[]
     */
    protected $domains;
    /**
     * Human-readable, English description of the problem with the contents of the field
     *
     * @var string
     */
    protected $message;
    /**
     * 1) JSONPath referring to the field within the data containing an error<br/>or<br/>2) JSONPath referring to an object containing an error
     *
     * @var string
     */
    protected $path;
    /**
     * JSONPath referring to the field on the object referenced by `path` containing an error
     *
     * @var string
     */
    protected $pathRelated;
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * An array of domain names the error is for. If tlds are specified in the request, `domains` will contain tlds. For example, if `domains` in request is ["test1.com", "test2.uk", "net"], and the field is invalid for com and net, then one of the `fields` in response will have ["test1.com", "net"] as `domains`
     *
     * @return string[]
     */
    public function getDomains() : array
    {
        return $this->domains;
    }
    /**
     * An array of domain names the error is for. If tlds are specified in the request, `domains` will contain tlds. For example, if `domains` in request is ["test1.com", "test2.uk", "net"], and the field is invalid for com and net, then one of the `fields` in response will have ["test1.com", "net"] as `domains`
     *
     * @param string[] $domains
     *
     * @return self
     */
    public function setDomains(array $domains) : self
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * Human-readable, English description of the problem with the contents of the field
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Human-readable, English description of the problem with the contents of the field
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 1) JSONPath referring to the field within the data containing an error<br/>or<br/>2) JSONPath referring to an object containing an error
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 1) JSONPath referring to the field within the data containing an error<br/>or<br/>2) JSONPath referring to an object containing an error
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * JSONPath referring to the field on the object referenced by `path` containing an error
     *
     * @return string
     */
    public function getPathRelated() : string
    {
        return $this->pathRelated;
    }
    /**
     * JSONPath referring to the field on the object referenced by `path` containing an error
     *
     * @param string $pathRelated
     *
     * @return self
     */
    public function setPathRelated(string $pathRelated) : self
    {
        $this->pathRelated = $pathRelated;
        return $this;
    }
}