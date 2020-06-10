<?php

namespace GoDaddy\Domain\Api\Endpoint;

class TransferIn extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domain;
    /**
     * 
     *
     * @param string $domain Domain to transfer in
     * @param \GoDaddy\Domain\Api\Model\DomainTransferIn $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id The Shopper to whom the domain should be transfered
     * }
     */
    public function __construct(string $domain, \GoDaddy\Domain\Api\Model\DomainTransferIn $requestBody, array $headerParameters = array())
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
        return str_replace(array('{domain}'), array($this->domain), '/v1/domains/{domain}/transfer');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainTransferIn) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainTransferIn) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \GoDaddy\Domain\Api\Model\DomainTransferIn) {
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
     * @throws \GoDaddy\Domain\Api\Exception\TransferInBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInConflictException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainPurchaseResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInConflictException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\TransferInInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}