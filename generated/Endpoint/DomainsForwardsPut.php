<?php

namespace GoDaddy\Domain\Api\Endpoint;

class DomainsForwardsPut extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $customerId;
    protected $fqdn;
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be modified.
     * @param \GoDaddy\Domain\Api\Model\DomainForwardingCreate $requestBody 
     */
    public function __construct(string $customerId, string $fqdn, \GoDaddy\Domain\Api\Model\DomainForwardingCreate $requestBody)
    {
        $this->customerId = $customerId;
        $this->fqdn = $fqdn;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{fqdn}'), array($this->customerId, $this->fqdn), '/v2/customers/{customerId}/domains/forwards/{fqdn}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainForwardingCreate) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutConflictException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutConflictException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsPutInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}