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
class DomainsContactsBulkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\DomainsContactsBulk';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\DomainsContactsBulk';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\DomainsContactsBulk();
        if (\array_key_exists('contactAdmin', $data)) {
            $object->setContactAdmin($this->denormalizer->denormalize($data['contactAdmin'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactBilling', $data)) {
            $object->setContactBilling($this->denormalizer->denormalize($data['contactBilling'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactPresence', $data)) {
            $object->setContactPresence($this->denormalizer->denormalize($data['contactPresence'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactRegistrant', $data)) {
            $object->setContactRegistrant($this->denormalizer->denormalize($data['contactRegistrant'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('contactTech', $data)) {
            $object->setContactTech($this->denormalizer->denormalize($data['contactTech'], 'GoDaddy\\Domain\\Api\\Model\\Contact', 'json', $context));
        }
        if (\array_key_exists('domains', $data)) {
            $values = array();
            foreach ($data['domains'] as $value) {
                $values[] = $value;
            }
            $object->setDomains($values);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContactAdmin()) {
            $data['contactAdmin'] = $this->normalizer->normalize($object->getContactAdmin(), 'json', $context);
        }
        if (null !== $object->getContactBilling()) {
            $data['contactBilling'] = $this->normalizer->normalize($object->getContactBilling(), 'json', $context);
        }
        if (null !== $object->getContactPresence()) {
            $data['contactPresence'] = $this->normalizer->normalize($object->getContactPresence(), 'json', $context);
        }
        if (null !== $object->getContactRegistrant()) {
            $data['contactRegistrant'] = $this->normalizer->normalize($object->getContactRegistrant(), 'json', $context);
        }
        if (null !== $object->getContactTech()) {
            $data['contactTech'] = $this->normalizer->normalize($object->getContactTech(), 'json', $context);
        }
        if (null !== $object->getDomains()) {
            $values = array();
            foreach ($object->getDomains() as $value) {
                $values[] = $value;
            }
            $data['domains'] = $values;
        }
        if (null !== $object->getEntityType()) {
            $data['entityType'] = $object->getEntityType();
        }
        return $data;
    }
}