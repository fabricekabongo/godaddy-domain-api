<?php

namespace GoDaddy\Domain\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statuses Only include results with `status` value in the specified set
     *     @var array $statusGroups Only include results with `status` value in any of the specified groups
     *     @var int $limit Maximum number of domains to return
     *     @var string $marker Marker Domain to use as the offset in results
     *     @var array $includes Optional details to be included in the response
     *     @var string $modifiedDate Only include results that have been modified since the specified date
     * }
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID whose domains are to be retrieved
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\ListDomainsInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainSummary[]|\Psr\Http\Message\ResponseInterface
     */
    public function listDomains(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\ListDomains($queryParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\GetAgreementInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\LegalAgreement[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAgreement(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\GetAgreement($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $domain Domain name whose availability is to be checked
     *     @var string $checkType Optimize for time ('FAST') or accuracy ('FULL')
     *     @var bool $forTransfer Whether or not to include domains available for transfer. If set to True, checkType is ignored
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainAvailableResponse|\Psr\Http\Message\ResponseInterface
     */
    public function available(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Available($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array[] $requestBody 
     * @param array $queryParameters {
     *     @var string $checkType Optimize for time ('FAST') or accuracy ('FULL')
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\AvailableBulkInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainAvailableBulk|\GoDaddy\Domain\Api\Model\DomainAvailableBulkMixed|\Psr\Http\Message\ResponseInterface
     */
    public function availableBulk(array $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\AvailableBulk($requestBody, $queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\ContactsValidateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contactsValidate(\GoDaddy\Domain\Api\Model\DomainsContactsBulk $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\ContactsValidate($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \GoDaddy\Domain\Api\Model\DomainPurchase $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id The Shopper for whom the domain should be purchased
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\PurchaseInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse|\Psr\Http\Message\ResponseInterface
     */
    public function purchase(\GoDaddy\Domain\Api\Model\DomainPurchase $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Purchase($requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $tld The Top-Level Domain whose schema should be retrieved
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\SchemaBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\SchemaInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\JsonSchema|\Psr\Http\Message\ResponseInterface
     */
    public function schema(string $tld, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Schema($tld), $fetch);
    }
    /**
     * 
     *
     * @param \GoDaddy\Domain\Api\Model\DomainPurchase $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\ValidateBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\ValidateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function validate(\GoDaddy\Domain\Api\Model\DomainPurchase $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Validate($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \GoDaddy\Domain\Api\Exception\SuggestBadRequestException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestUnauthorizedException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestForbiddenException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestNotFoundException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestUnprocessableEntityException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestTooManyRequestsException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestInternalServerErrorException
    * @throws \GoDaddy\Domain\Api\Exception\SuggestGatewayTimeoutException
    *
    * @return null|\GoDaddy\Domain\Api\Model\DomainSuggestion[]|\Psr\Http\Message\ResponseInterface
    */
    public function suggest(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Suggest($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\TldsBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\TldsUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\TldsForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\TldsTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\TldsInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\TldSummary[]|\Psr\Http\Message\ResponseInterface
     */
    public function tlds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Tlds(), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain to cancel
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\CancelBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\CancelUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\CancelForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\CancelNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\CancelUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\CancelTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\CancelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancel(string $domain, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Cancel($domain), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain name whose details are to be retrieved
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID expected to own the specified domain
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\GetBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\GetUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\GetForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\GetNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\GetUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\GetTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\GetInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainDetail|\Psr\Http\Message\ResponseInterface
     */
    public function get(string $domain, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Get($domain, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose details are to be updated
     * @param \GoDaddy\Domain\Api\Model\DomainUpdate $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper for whom Domain is to be updated. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\UpdateBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateConflictException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function update(string $domain, \GoDaddy\Domain\Api\Model\DomainUpdate $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Update($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose Contacts are to be updated.
     * @param \GoDaddy\Domain\Api\Model\DomainContacts $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper for whom domain contacts are to be updated. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\UpdateContactsGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateContacts(string $domain, \GoDaddy\Domain\Api\Model\DomainContacts $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\UpdateContacts($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose privacy is to be cancelled
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID of the owner of the domain
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\CancelPrivacyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancelPrivacy(string $domain, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\CancelPrivacy($domain, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain for which to purchase privacy
     * @param \GoDaddy\Domain\Api\Model\PrivacyPurchase $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID of the owner of the domain
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyConflictException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\PurchasePrivacyInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse|\Psr\Http\Message\ResponseInterface
     */
    public function purchasePrivacy(string $domain, \GoDaddy\Domain\Api\Model\PrivacyPurchase $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\PurchasePrivacy($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be augmented
     * @param \GoDaddy\Domain\Api\Model\DNSRecord[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordAddGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recordAdd(string $domain, array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\RecordAdd($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be replaced
     * @param \GoDaddy\Domain\Api\Model\DNSRecord[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recordReplace(string $domain, array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\RecordReplace($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be retrieved
     * @param string $type DNS Record Type for which DNS Records are to be retrieved
     * @param string $name DNS Record Name for which DNS Records are to be retrieved
     * @param array $queryParameters {
     *     @var int $offset Number of results to skip for pagination
     *     @var int $limit Maximum number of items to return
     * }
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordGetGatewayTimeoutException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DNSRecord[]|\Psr\Http\Message\ResponseInterface
     */
    public function recordGet(string $domain, string $type, string $name, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\RecordGet($domain, $type, $name, $queryParameters, $headerParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNameGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recordReplaceTypeName(string $domain, string $type, string $name, array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\RecordReplaceTypeName($domain, $type, $name, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose DNS Records are to be replaced
     * @param string $type DNS Record Type for which DNS Records are to be replaced
     * @param \GoDaddy\Domain\Api\Model\DNSRecordCreateType[] $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper ID which owns the domain. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\RecordReplaceTypeGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recordReplaceType(string $domain, string $type, array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\RecordReplaceType($domain, $type, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain to renew
     * @param \GoDaddy\Domain\Api\Model\DomainRenew $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper for whom Domain is to be renewed. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\RenewBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\RenewUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\RenewForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\RenewNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\RenewConflictException
     * @throws \GoDaddy\Domain\Api\Exception\RenewUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\RenewTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\RenewInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse|\Psr\Http\Message\ResponseInterface
     */
    public function renew(string $domain, \GoDaddy\Domain\Api\Model\DomainRenew $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\Renew($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain to transfer in
     * @param \GoDaddy\Domain\Api\Model\DomainTransferIn $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id The Shopper to whom the domain should be transfered
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\TransferInBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInConflictException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\TransferInInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainPurchaseResponse|\Psr\Http\Message\ResponseInterface
     */
    public function transferIn(string $domain, \GoDaddy\Domain\Api\Model\DomainTransferIn $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\TransferIn($domain, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domain Domain whose Contact E-mail should be verified.
     * @param array $headerParameters {
     *     @var string $X-Shopper-Id Shopper for whom domain contact e-mail should be verified. NOTE: This is only required if you are a Reseller managing a domain purchased outside the scope of your reseller account. For instance, if you're a Reseller, but purchased a Domain via http://www.godaddy.com
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailBadRequestException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailInternalServerErrorException
     * @throws \GoDaddy\Domain\Api\Exception\VerifyEmailGatewayTimeoutException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function verifyEmail(string $domain, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\VerifyEmail($domain, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be deleted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteConflictException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function domainsForwardsDelete(string $customerId, string $fqdn, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\DomainsForwardsDelete($customerId, $fqdn), $fetch);
    }
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be retrieved.
     * @param array $queryParameters {
     *     @var bool $includeSubs Optionally include all sub domains if the fqdn specified is a domain and not a sub domain.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsGetInternalServerErrorException
     *
     * @return null|\GoDaddy\Domain\Api\Model\DomainForwarding[]|\Psr\Http\Message\ResponseInterface
     */
    public function domainsForwardsGet(string $customerId, string $fqdn, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\DomainsForwardsGet($customerId, $fqdn, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $customerId The Customer identifier<br/> Note: For API Resellers, performing actions on behalf of your customers, you need to specify the Subaccount you're operating on behalf of; otherwise use your shopper id.
     * @param string $fqdn The fully qualified domain name whose forwarding details are to be modified.
     * @param \GoDaddy\Domain\Api\Model\DomainForwardingCreate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnauthorizedException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutForbiddenException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutNotFoundException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutConflictException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutUnprocessableEntityException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutTooManyRequestsException
     * @throws \GoDaddy\Domain\Api\Exception\DomainsForwardsPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function domainsForwardsPut(string $customerId, string $fqdn, \GoDaddy\Domain\Api\Model\DomainForwardingCreate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \GoDaddy\Domain\Api\Endpoint\DomainsForwardsPut($customerId, $fqdn, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.{environment}.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \GoDaddy\Domain\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}