<?php

namespace GoDaddy\Domain\Api\Endpoint;

class PurchasePrivacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    /**
     * 
     *
     * @param string $domain Domain for which to purchase privacy
     * @param \GoDaddy\Domain\Api\Model\PrivacyPurchase $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID of the owner of the domain
     * }
     */
    public function __construct(string $domain, \GoDaddy\Domain\Api\Model\PrivacyPurchase $requestBody, array $headerParameters = array())
    {
        $this->domain = $domain;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain}'), array($this->domain), '/v1/domains/{domain}/privacy/purchase');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\PrivacyPurchase) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\PrivacyPurchase) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\PrivacyPurchase) {
            return array(array('Content-Type' => array('text/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyConflictException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainPurchaseResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyConflictException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\PurchasePrivacyInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}