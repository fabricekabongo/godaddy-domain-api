<?php

namespace GoDaddy\Domain\Api\Endpoint;

class ListDomains extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statuses Only include results with `status` value in the specified set
     *     @var array $statusGroups Only include results with `status` value in any of the specified groups
     *     @var int $limit Maximum number of domains to return
     *     @var string $marker Marker Domain to use as the offset in results
     *     @var array $includes Optional details to be included in the response
     *     @var string $modifiedDate Only include results that have been modified since the specified date
     * }
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID whose domains are to be retrieved
     * }
     */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/domains';
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
        $optionsResolver->setDefined(array('statuses', 'statusGroups', 'limit', 'marker', 'includes', 'modifiedDate'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('statuses', array('array'));
        $optionsResolver->setAllowedTypes('statusGroups', array('array'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('marker', array('string'));
        $optionsResolver->setAllowedTypes('includes', array('array'));
        $optionsResolver->setAllowedTypes('modifiedDate', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Shopper-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Shopper-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainSummary[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainSummary[]', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ListDomainsInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}