<?php

namespace GoDaddy\Domain\Api\Model;

class LegalAgreement
{
    /**
     * Unique identifier for the legal agreement
     *
     * @var string
     */
    protected $agreementKey;
    /**
     * Contents of the legal agreement, suitable for embedding
     *
     * @var string
     */
    protected $content;
    /**
     * Title of the legal agreement
     *
     * @var string
     */
    protected $title;
    /**
     * URL to a page containing the legal agreement
     *
     * @var string
     */
    protected $url;
    /**
     * Unique identifier for the legal agreement
     *
     * @return string
     */
    public function getAgreementKey() : string
    {
        return $this->agreementKey;
    }
    /**
     * Unique identifier for the legal agreement
     *
     * @param string $agreementKey
     *
     * @return self
     */
    public function setAgreementKey(string $agreementKey) : self
    {
        $this->agreementKey = $agreementKey;
        return $this;
    }
    /**
     * Contents of the legal agreement, suitable for embedding
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * Contents of the legal agreement, suitable for embedding
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Title of the legal agreement
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the legal agreement
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * URL to a page containing the legal agreement
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL to a page containing the legal agreement
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}