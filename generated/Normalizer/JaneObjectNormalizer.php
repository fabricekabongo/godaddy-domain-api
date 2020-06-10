<?php

namespace GoDaddy\Domain\Api\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('GoDaddy\\Domain\\Api\\Model\\Address' => 'GoDaddy\\Domain\\Api\\Normalizer\\AddressNormalizer', 'GoDaddy\\Domain\\Api\\Model\\Consent' => 'GoDaddy\\Domain\\Api\\Normalizer\\ConsentNormalizer', 'GoDaddy\\Domain\\Api\\Model\\ConsentDomainUpdate' => 'GoDaddy\\Domain\\Api\\Normalizer\\ConsentDomainUpdateNormalizer', 'GoDaddy\\Domain\\Api\\Model\\Contact' => 'GoDaddy\\Domain\\Api\\Normalizer\\ContactNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DNSRecord' => 'GoDaddy\\Domain\\Api\\Normalizer\\DNSRecordNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DNSRecordCreateType' => 'GoDaddy\\Domain\\Api\\Normalizer\\DNSRecordCreateTypeNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DNSRecordCreateTypeName' => 'GoDaddy\\Domain\\Api\\Normalizer\\DNSRecordCreateTypeNameNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainAvailableBulk' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainAvailableBulkNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainAvailableBulkMixed' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainAvailableBulkMixedNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainAvailableError' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainAvailableErrorNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainAvailableResponse' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainAvailableResponseNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainContacts' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainContactsNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainDetail' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainDetailNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainPurchase' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainPurchaseNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainPurchaseResponse' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainPurchaseResponseNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainRenew' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainRenewNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainSuggestion' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainSuggestionNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainSummary' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainSummaryNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainForwardingMask' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainForwardingMaskNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainForwardingCreate' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainForwardingCreateNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainForwarding' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainForwardingNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainTransferIn' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainTransferInNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainUpdate' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainUpdateNormalizer', 'GoDaddy\\Domain\\Api\\Model\\DomainsContactsBulk' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainsContactsBulkNormalizer', 'GoDaddy\\Domain\\Api\\Model\\Error' => 'GoDaddy\\Domain\\Api\\Normalizer\\ErrorNormalizer', 'GoDaddy\\Domain\\Api\\Model\\ErrorDomainContactsValidate' => 'GoDaddy\\Domain\\Api\\Normalizer\\ErrorDomainContactsValidateNormalizer', 'GoDaddy\\Domain\\Api\\Model\\ErrorField' => 'GoDaddy\\Domain\\Api\\Normalizer\\ErrorFieldNormalizer', 'GoDaddy\\Domain\\Api\\Model\\ErrorFieldDomainContactsValidate' => 'GoDaddy\\Domain\\Api\\Normalizer\\ErrorFieldDomainContactsValidateNormalizer', 'GoDaddy\\Domain\\Api\\Model\\ErrorLimit' => 'GoDaddy\\Domain\\Api\\Normalizer\\ErrorLimitNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonDataType' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonDataTypeNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonProperty' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonPropertyNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonPropertyItems' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonPropertyItemsNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonSchema' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonSchemaNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonSchemaModels' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonSchemaModelsNormalizer', 'GoDaddy\\Domain\\Api\\Model\\JsonSchemaProperties' => 'GoDaddy\\Domain\\Api\\Normalizer\\JsonSchemaPropertiesNormalizer', 'GoDaddy\\Domain\\Api\\Model\\LegalAgreement' => 'GoDaddy\\Domain\\Api\\Normalizer\\LegalAgreementNormalizer', 'GoDaddy\\Domain\\Api\\Model\\PrivacyPurchase' => 'GoDaddy\\Domain\\Api\\Normalizer\\PrivacyPurchaseNormalizer', 'GoDaddy\\Domain\\Api\\Model\\RealNameValidation' => 'GoDaddy\\Domain\\Api\\Normalizer\\RealNameValidationNormalizer', 'GoDaddy\\Domain\\Api\\Model\\TldSummary' => 'GoDaddy\\Domain\\Api\\Normalizer\\TldSummaryNormalizer', 'GoDaddy\\Domain\\Api\\Model\\VerificationDomainName' => 'GoDaddy\\Domain\\Api\\Normalizer\\VerificationDomainNameNormalizer', 'GoDaddy\\Domain\\Api\\Model\\VerificationRealName' => 'GoDaddy\\Domain\\Api\\Normalizer\\VerificationRealNameNormalizer', 'GoDaddy\\Domain\\Api\\Model\\VerificationsDomain' => 'GoDaddy\\Domain\\Api\\Normalizer\\VerificationsDomainNormalizer', 'GoDaddy\\Domain\\Api\\Model\\Domain' => 'GoDaddy\\Domain\\Api\\Normalizer\\DomainNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}