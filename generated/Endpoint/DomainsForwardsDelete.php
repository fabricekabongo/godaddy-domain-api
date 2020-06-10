<?php

namespace GoDaddy\Domain\Api\Endpoint;

class DomainsForwardsDelete extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $customerId;
    protected $fqdn;
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be deleted.
     */
    public function __construct(string $customerId, string $fqdn)
    {
        $this->customerId = $customerId;
        $this->fqdn = $fqdn;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{fqdn}'), array($this->customerId, $this->fqdn), '/v2/customers/{customerId}/domains/forwards/{fqdn}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteConflictException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteConflictException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}