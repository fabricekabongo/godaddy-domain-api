<?php

namespace GoDaddy\Domain\Api\Endpoint;

class Available extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $domain Domain name whose availability is to be checked
     *     @var string $checkType Optimize for time ('FAST') or accuracy ('FULL')
     *     @var bool $forTransfer Whether or not to include domains available for transfer. If set to True, checkType is ignored
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/domains/available';
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
        $optionsResolver->setDefined(array('domain', 'checkType', 'forTransfer'));
        $optionsResolver->setRequired(array('domain'));
        $optionsResolver->setDefaults(array('checkType' => 'FAST', 'forTransfer' => false));
        $optionsResolver->setAllowedTypes('domain', array('string'));
        $optionsResolver->setAllowedTypes('checkType', array('string'));
        $optionsResolver->setAllowedTypes('forTransfer', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainAvailableResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainAvailableResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\AvailableInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}