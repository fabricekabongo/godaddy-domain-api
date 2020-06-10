<?php

namespace GoDaddy\Domain\Api\Model;

class DomainForwardingMask
{
    /**
     * Displays at the top of the browser window and in search results.
     *
     * @var string
     */
    protected $title;
    /**
     * A short description of your website to display in search engine results.
     *
     * @var string
     */
    protected $description;
    /**
     * A list of comma-separated keywords that describes the content and purpose of your website.
     *
     * @var string
     */
    protected $keywords;
    /**
     * Displays at the top of the browser window and in search results.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Displays at the top of the browser window and in search results.
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
     * A short description of your website to display in search engine results.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of your website to display in search engine results.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * A list of comma-separated keywords that describes the content and purpose of your website.
     *
     * @return string
     */
    public function getKeywords() : string
    {
        return $this->keywords;
    }
    /**
     * A list of comma-separated keywords that describes the content and purpose of your website.
     *
     * @param string $keywords
     *
     * @return self
     */
    public function setKeywords(string $keywords) : self
    {
        $this->keywords = $keywords;
        return $this;
    }
}