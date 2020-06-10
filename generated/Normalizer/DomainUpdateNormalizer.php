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
class DomainUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\DomainUpdate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\DomainUpdate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\DomainUpdate();
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('nameServers', $data)) {
            $values = array();
            foreach ($data['nameServers'] as $value) {
                $values[] = $value;
            }
            $object->setNameServers($values);
        }
        if (\array_key_exists('renewAuto', $data)) {
            $object->setRenewAuto($data['renewAuto']);
        }
        if (\array_key_exists('subaccountId', $data)) {
            $object->setSubaccountId($data['subaccountId']);
        }
        if (\array_key_exists('exposeWhois', $data)) {
            $object->setExposeWhois($data['exposeWhois']);
        }
        if (\array_key_exists('consent', $data)) {
            $object->setConsent($this->denormalizer->denormalize($data['consent'], 'GoDaddy\\Domain\\Api\\Model\\ConsentDomainUpdate', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLocked()) {
            $data['locked'] = $object->getLocked();
        }
        if (null !== $object->getNameServers()) {
            $values = array();
            foreach ($object->getNameServers() as $value) {
                $values[] = $value;
            }
            $data['nameServers'] = $values;
        }
        if (null !== $object->getRenewAuto()) {
            $data['renewAuto'] = $object->getRenewAuto();
        }
        if (null !== $object->getSubaccountId()) {
            $data['subaccountId'] = $object->getSubaccountId();
        }
        if (null !== $object->getExposeWhois()) {
            $data['exposeWhois'] = $object->getExposeWhois();
        }
        if (null !== $object->getConsent()) {
            $data['consent'] = $this->normalizer->normalize($object->getConsent(), 'json', $context);
        }
        return $data;
    }
}