<?php

namespace GoDaddy\Domain\Api\Endpoint;

class Suggest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $query Domain name or set of keywords for which alternative domain names will be suggested
    *     @var string $country Two-letter ISO country code to be used as a hint for target region<br/><br/>
    NOTE: These are sample values, there are many
    <a href="http://www.iso.org/iso/country_codes.htm">more</a>
    *     @var string $city Name of city to be used as a hint for target region
    *     @var array $sources Sources to be queried<br/><br/><ul>
    <li><strong>CC_TLD</strong> - Varies the TLD using Country Codes</li>
    <li><strong>EXTENSION</strong> - Varies the TLD</li>
    <li><strong>KEYWORD_SPIN</strong> - Identifies keywords and then rotates each one</li>
    <li><strong>PREMIUM</strong> - Includes variations with premium prices</li></ul>
    *     @var array $tlds Top-level domains to be included in suggestions<br/><br/>
    NOTE: These are sample values, there are many
    <a href="http://www.godaddy.com/tlds/gtld.aspx#domain_search_form">more</a>
    *     @var int $lengthMax Maximum length of second-level domain
    *     @var int $lengthMin Minimum length of second-level domain
    *     @var int $limit Maximum number of suggestions to return
    *     @var int $waitMs Maximum amount of time, in milliseconds, to wait for responses
    If elapses, return the results compiled up to that point
    * }
    * @param array $headerParameters {
    *     @var string $X-Shopper-Id Shopper ID for which the suggestions are being generated
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
        return '/v1/domains/suggest';
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
        $optionsResolver->setDefined(array('query', 'country', 'city', 'sources', 'tlds', 'lengthMax', 'lengthMin', 'limit', 'waitMs'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('waitMs' => 1000));
        $optionsResolver->setAllowedTypes('query', array('string'));
        $optionsResolver->setAllowedTypes('country', array('string'));
        $optionsResolver->setAllowedTypes('city', array('string'));
        $optionsResolver->setAllowedTypes('sources', array('array'));
        $optionsResolver->setAllowedTypes('tlds', array('array'));
        $optionsResolver->setAllowedTypes('lengthMax', array('int'));
        $optionsResolver->setAllowedTypes('lengthMin', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('waitMs', array('int'));
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
     * @throws \GoDaddy\Domain\Api\Exception\SuggestBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\SuggestGatewayTimeoutException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainSuggestion[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\DomainSuggestion[]', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestBadRequestException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestUnauthorizedException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestForbiddenException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestNotFoundException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestUnprocessableEntityException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestTooManyRequestsException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestInternalServerErrorException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
        if (504 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \GoDaddy\Domain\Api\Exception\SuggestGatewayTimeoutException($serializer->deserialize($body, 'GoDaddy\\Domain\\Api\\Model\\Error', 'json'));
        }
    }
}