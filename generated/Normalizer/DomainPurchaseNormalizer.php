<?php

namespace GoDaddy\Domain\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DomainPurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\DomainPurchase';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\DomainPurchase';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\DomainPurchase();
        if (\array_key_exists('consent', $data)) {
            $object->setConsent($this->denormalizer->denormalize($data['consent'], 'GoDaddy\\Domain\\Api\\Model\\Consent', 'json', $context));
        }
        if (\array_key_exists('contactAdmin', $data)) {
            $object->setContactAdmin($this->denormalizer->denormalize($data['contactAdmin'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactBilling', $data)) {
            $object->setContactBilling($this->denormalizer->denormalize($data['contactBilling'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactRegistrant', $data)) {
            $object->setContactRegistrant($this->denormalizer->denormalize($data['contactRegistrant'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactTech', $data)) {
            $object->setContactTech($this->denormalizer->denormalize($data['contactTech'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
        }
        if (\array_key_exists('nameServers', $data)) {
            $values = array();
            foreach ($data['nameServers'] as $value) {
                $values[] = $value;
            }
            $object->setNameServers($values);
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($data['period']);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
        }
        if (\array_key_exists('renewAuto', $data)) {
            $object->setRenewAuto($data['renewAuto']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConsent()) {
            $data['consent'] = $this->normalizer->normalize($object->getConsent(), 'json', $context);
        }
        if (null !== $object->getContactAdmin()) {
            $data['contactAdmin'] = $this->normalizer->normalize($object->getContactAdmin(), 'json', $context);
        }
        if (null !== $object->getContactBilling()) {
            $data['contactBilling'] = $this->normalizer->normalize($object->getContactBilling(), 'json', $context);
        }
        if (null !== $object->getContactRegistrant()) {
            $data['contactRegistrant'] = $this->normalizer->normalize($object->getContactRegistrant(), 'json', $context);
        }
        if (null !== $object->getContactTech()) {
            $data['contactTech'] = $this->normalizer->normalize($object->getContactTech(), 'json', $context);
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getNameServers()) {
            $values = array();
            foreach ($object->getNameServers() as $value) {
                $values[] = $value;
            }
            $data['nameServers'] = $values;
        }
        if (null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if (null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if (null !== $object->getRenewAuto()) {
            $data['renewAuto'] = $object->getRenewAuto();
        }
        return $data;
    }
}