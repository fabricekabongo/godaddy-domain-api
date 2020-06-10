<?php

namespace GoDaddy\Domain\Api\Model;

class DomainForwardingCreate
{
    /**
     * The type of fowarding to implement<br/><ul><li><strong style='margin-left: 12px;'>MASKED</strong> - Prevents the forwarded domain or subdomain URL from displaying in the browser's address bar.</li><li><strong style='margin-left: 12px;'>REDIRECT_PERMANENT*</strong> - Redirects to the url you specified in the forwardTo field using a `301 Moved Permanently` HTTP response. The HTTP 301 response code tells user-agents (including search engines) that the location has permanently moved.</li><li><strong style='margin-left: 12px;'>REDIRECT_TEMPORARY</strong> - Redirects to the url you specified in the forwardTo field using a `302 Found` HTTP response. The HTTP 302 response code tells user-agents (including search engines) that the location has temporarily moved.</li></ul>
     *
     * @var string
     */
    protected $type = 'REDIRECT_PERMANENT';
    /**
     * Forwards http(s) traffic to this destination url (ex. http://www.somedomain.com/)
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var DomainForwardingMask
     */
    protected $mask;
    /**
     * The type of fowarding to implement<br/><ul><li><strong style='margin-left: 12px;'>MASKED</strong> - Prevents the forwarded domain or subdomain URL from displaying in the browser's address bar.</li><li><strong style='margin-left: 12px;'>REDIRECT_PERMANENT*</strong> - Redirects to the url you specified in the forwardTo field using a `301 Moved Permanently` HTTP response. The HTTP 301 response code tells user-agents (including search engines) that the location has permanently moved.</li><li><strong style='margin-left: 12px;'>REDIRECT_TEMPORARY</strong> - Redirects to the url you specified in the forwardTo field using a `302 Found` HTTP response. The HTTP 302 response code tells user-agents (including search engines) that the location has temporarily moved.</li></ul>
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of fowarding to implement<br/><ul><li><strong style='margin-left: 12px;'>MASKED</strong> - Prevents the forwarded domain or subdomain URL from displaying in the browser's address bar.</li><li><strong style='margin-left: 12px;'>REDIRECT_PERMANENT*</strong> - Redirects to the url you specified in the forwardTo field using a `301 Moved Permanently` HTTP response. The HTTP 301 response code tells user-agents (including search engines) that the location has permanently moved.</li><li><strong style='margin-left: 12px;'>REDIRECT_TEMPORARY</strong> - Redirects to the url you specified in the forwardTo field using a `302 Found` HTTP response. The HTTP 302 response code tells user-agents (including search engines) that the location has temporarily moved.</li></ul>
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
    /**
     * Forwards http(s) traffic to this destination url (ex. http://www.somedomain.com/)
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Forwards http(s) traffic to this destination url (ex. http://www.somedomain.com/)
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
    /**
     * 
     *
     * @return DomainForwardingMask
     */
    public function getMask() : DomainForwardingMask
    {
        return $this->mask;
    }
    /**
     * 
     *
     * @param DomainForwardingMask $mask
     *
     * @return self
     */
    public function setMask(DomainForwardingMask $mask) : self
    {
        $this->mask = $mask;
        return $this;
    }
}