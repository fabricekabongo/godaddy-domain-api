<?php

namespace GoDaddy\Domain\Api\Endpoint;

class RecordAdd extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be augmented
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
        return 'PATCH';
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
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddGatewayTimeoutException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (504 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordAddGatewayTimeoutException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}