<?php

namespace GoDaddy\Domain\Api\Model;

class ErrorLimit
{
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @var string
     */
    protected $code;
    /**
     * List of the specific fields, and the errors found with their contents
     *
     * @var ErrorField[]
     */
    protected $fields;
    /**
     * Human-readable, English description of the error
     *
     * @var string
     */
    protected $message;
    /**
     * Number of seconds to wait before attempting a similar request
     *
     * @var int
     */
    protected $retryAfterSec;
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
     * List of the specific fields, and the errors found with their contents
     *
     * @return ErrorField[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * List of the specific fields, and the errors found with their contents
     *
     * @param ErrorField[] $fields
     *
     * @return self
     */
    public function setFields(array $fields) : self
    {
        $this->fields = $fields;
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
     * Number of seconds to wait before attempting a similar request
     *
     * @return int
     */
    public function getRetryAfterSec() : int
    {
        return $this->retryAfterSec;
    }
    /**
     * Number of seconds to wait before attempting a similar request
     *
     * @param int $retryAfterSec
     *
     * @return self
     */
    public function setRetryAfterSec(int $retryAfterSec) : self
    {
        $this->retryAfterSec = $retryAfterSec;
        return $this;
    }
}