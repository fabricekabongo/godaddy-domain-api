<?php

namespace GoDaddy\Domain\Api\Model;

class ErrorDomainContactsValidate
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
     * @var ErrorFieldDomainContactsValidate[]
     */
    protected $fields;
    /**
     * Human-readable, English description of the error
     *
     * @var string
     */
    protected $message;
    /**
     * Stack trace indicating where the error occurred.<br/>NOTE: This attribute <strong>MAY</strong> be included for Development and Test environments. However, it <strong>MUST NOT</strong> be exposed from OTE nor Production systems
     *
     * @var string[]
     */
    protected $stack;
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
     * @return ErrorFieldDomainContactsValidate[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * List of the specific fields, and the errors found with their contents
     *
     * @param ErrorFieldDomainContactsValidate[] $fields
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
     * Stack trace indicating where the error occurred.<br/>NOTE: This attribute <strong>MAY</strong> be included for Development and Test environments. However, it <strong>MUST NOT</strong> be exposed from OTE nor Production systems
     *
     * @return string[]
     */
    public function getStack() : array
    {
        return $this->stack;
    }
    /**
     * Stack trace indicating where the error occurred.<br/>NOTE: This attribute <strong>MAY</strong> be included for Development and Test environments. However, it <strong>MUST NOT</strong> be exposed from OTE nor Production systems
     *
     * @param string[] $stack
     *
     * @return self
     */
    public function setStack(array $stack) : self
    {
        $this->stack = $stack;
        return $this;
    }
}