<?php

namespace GoDaddy\Domain\Api\Endpoint;

class ContactsValidate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * All contacts specified in request will be validated against all domains specifed in "domains". As an alternative, you can also pass in tlds, with the exception of `uk`, which requires full domain names
     *
     * @param \GoDaddy\Domain\Api\Model\DomainsContactsBulk $requestBody 
     * @param array $queryParameters {
     *     @var string $marketId MarketId in which the request is being made, and for which responses should be localized
     * }
     * @param array $headerParameters {
     *     @var int $X-Private-Label-Id PrivateLabelId to operate as, if different from JWT
     * }
     */
    public function __construct(\GoDaddy\Domain\Api\Model\DomainsContactsBulk $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/domains/contacts/validate';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainsContactsBulk) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainsContactsBulk) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainsContactsBulk) {
            return array(array('Content-Type' => array('text/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('marketId'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('marketId' => 'en-US'));
        $optionsResolver->setAllowedTypes('marketId', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Private-Label-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Private-Label-Id' => 1));
        $optionsResolver->setAllowedTypes('X-Private-Label-Id', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (204 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ContactsValidateBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ContactsValidateUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorDomainContactsValidate', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ContactsValidateTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\ContactsValidateInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}