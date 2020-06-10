<?php

namespace GoDaddy\Domain\Api\Endpoint;

class DomainsForwardsGet extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $customerId;
    protected $fqdn;
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be retrieved.
     * @param array $queryParameters {
     *     @var bool $includeSubs Optionally include all sub domains if the fqdn specified is a domain and not a sub domain.
     * }
     */
    public function __construct(string $customerId, string $fqdn, array $queryParameters = array())
    {
        $this->customerId = $customerId;
        $this->fqdn = $fqdn;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('includeSubs'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('includeSubs', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainForwarding[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainForwarding[]', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\DomainsForwardsGetInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}