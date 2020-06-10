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
class VerificationsDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\VerificationsDomain';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\VerificationsDomain';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\VerificationsDomain();
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($this->denormalizer->denormalize($data['domainName'], 'GoDaddy\\Domain\\Api\\Model\\VerificationDomainName', 'json', $context));
        }
        if (\array_key_exists('realName', $data)) {
            $object->setRealName($this->denormalizer->denormalize($data['realName'], 'GoDaddy\\Domain\\Api\\Model\\VerificationRealName', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainName()) {
            $data['domainName'] = $this->normalizer->normalize($object->getDomainName(), 'json', $context);
        }
        if (null !== $object->getRealName()) {
            $data['realName'] = $this->normalizer->normalize($object->getRealName(), 'json', $context);
        }
        return $data;
    }
}