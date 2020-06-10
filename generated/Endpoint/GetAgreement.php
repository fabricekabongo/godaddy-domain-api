<?php

namespace GoDaddy\Domain\Api\Endpoint;

class GetAgreement extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $tlds list of TLDs whose legal agreements are to be retrieved
     *     @var bool $privacy Whether or not privacy has been requested
     *     @var bool $forTransfer Whether or not domain tranfer has been requested
     * }
     * @param array $headerParameters {
     *     @var string $X-Market-Id Unique identifier of the Market used to retrieve/translate Legal Agreements
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
        return '/v1/domains/agreements';
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
        $optionsResolver->setDefined(array('tlds', 'privacy', 'forTransfer'));
        $optionsResolver->setRequired(array('tlds', 'privacy'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('tlds', array('array'));
        $optionsResolver->setAllowedTypes('privacy', array('bool'));
        $optionsResolver->setAllowedTypes('forTransfer', array('bool'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Market-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Market-Id' => 'en-US'));
        $optionsResolver->setAllowedTypes('X-Market-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\LegalAgreement[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\LegalAgreement[]', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\GetAgreementInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}