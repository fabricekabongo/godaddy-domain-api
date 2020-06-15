<?php

namespace GoDaddy\Domain\Api\Endpoint;

class RecordReplaceType extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    protected $type;
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be replaced
     * @param string $type DNS Record Type for which DNS Records are to be replaced
     * @param \GoDaddy\Domain\Api\Model\DNSRecordCreateType[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     */
    public function __construct(string $domain, string $type, array $requestBody, array $headerParameters = array())
    {
        $this->domain = $domain;
        $this->type = $type;
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
        return str_replace(array('{domain}', '{type}'), array($this->domain, $this->type), '/v1/domains/{domain}/records/{type}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateType) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateType) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateType) {
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
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeGatewayTimeoutException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (504 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeGatewayTimeoutException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('ApiKeyAuth');
    }
}