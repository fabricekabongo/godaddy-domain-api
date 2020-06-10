<?php

namespace GoDaddy\Domain\Api\Model;

class ErrorField
{
    /**
     * Short identifier for the error, suitable for indicating the specific error within client code
     *
     * @var string
     */
    protected $code;
    /**
     * Human-readable, English description of the problem with the contents of the field
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
     * JSONPath referring to a field containing an error, which is referenced by `path`
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
     * JSONPath referring to a field containing an error, which is referenced by `path`
     *
     * @return string
     */
    public function getPathRelated() : string
    {
        return $this->pathRelated;
    }
    /**
     * JSONPath referring to a field containing an error, which is referenced by `path`
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