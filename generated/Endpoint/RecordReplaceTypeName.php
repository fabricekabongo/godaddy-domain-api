<?php

namespace GoDaddy\Domain\Api\Endpoint;

class RecordReplaceTypeName extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    protected $type;
    protected $name;
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be replaced
     * @param string $type DNS Record Type for which DNS Records are to be replaced
     * @param string $name DNS Record Name for which DNS Records are to be replaced
     * @param \GoDaddy\Domain\Api\Model\DNSRecordCreateTypeName[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     */
    public function __construct(string $domain, string $type, string $name, array $requestBody, array $headerParameters = array())
    {
        $this->domain = $domain;
        $this->type = $type;
        $this->name = $name;
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
        return str_replace(array('{domain}', '{type}', '{name}'), array($this->domain, $this->type, $this->name), '/v1/domains/{domain}/records/{type}/{name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateTypeName) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateTypeName) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \GoDaddy\Domain\Api\Model\DNSRecordCreateTypeName) {
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
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameGatewayTimeoutException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (504 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameGatewayTimeoutException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}