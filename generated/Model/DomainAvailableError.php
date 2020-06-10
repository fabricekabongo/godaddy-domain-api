<?php

namespace GoDaddy\Domain\Api\Model;

class DomainAvailableError
{
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @var string
     */
    protected $code;
    /**
     * Domain name
     *
     * @var string
     */
    protected $domain;
    /**
     * Human-readable, English description of the error
     *
     * @var string
     */
    protected $message;
    /**
    * <ul>
    <li style='margin-left: 12px;'>JSONPath referring to a field containing an error</li>
    <strong style='margin-left: 12px;'>OR</strong>
    <li style='margin-left: 12px;'>JSONPath referring to a field that refers to an object containing an error, with more detail in `pathRelated`</li>
    </ul>
    *
    * @var string
    */
    protected $path;
    /**
     * HTTP status code that would return for a single check
     *
     * @var int
     */
    protected $status;
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
     * Human-readable, English description of the error
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Human-readable, English description of the error
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
    * <ul>
    <li style='margin-left: 12px;'>JSONPath referring to a field containing an error</li>
    <strong style='margin-left: 12px;'>OR</strong>
    <li style='margin-left: 12px;'>JSONPath referring to a field that refers to an object containing an error, with more detail in `pathRelated`</li>
    </ul>
    *
    * @return string
    */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
    * <ul>
    <li style='margin-left: 12px;'>JSONPath referring to a field containing an error</li>
    <strong style='margin-left: 12px;'>OR</strong>
    <li style='margin-left: 12px;'>JSONPath referring to a field that refers to an object containing an error, with more detail in `pathRelated`</li>
    </ul>
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
     * HTTP status code that would return for a single check
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * HTTP status code that would return for a single check
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
}