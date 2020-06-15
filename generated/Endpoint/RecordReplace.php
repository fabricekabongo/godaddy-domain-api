<?php

namespace GoDaddy\Domain\Api\Endpoint;

class RecordReplace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be replaced
     * @param \GoDaddy\Domain\Api\Model\DNSRecord[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     */
    public function __construct(string $domain, array $requestBody, array $headerParameters = array())
    {
        $this->domain = $domain;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain}'), array($this->domain), '/v1/domains/{domain}/records');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecord) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecord) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecord) {
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
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceGatewayTimeoutException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (504 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceGatewayTimeoutException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}