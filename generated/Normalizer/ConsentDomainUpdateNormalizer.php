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
class ConsentDomainUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\ConsentDomainUpdate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\ConsentDomainUpdate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\ConsentDomainUpdate();
        if (\array_key_exists('agreedAt', $data)) {
            $object->setAgreedAt($data['agreedAt']);
        }
        if (\array_key_exists('agreedBy', $data)) {
            $object->setAgreedBy($data['agreedBy']);
        }
        if (\array_key_exists('agreementKeys', $data)) {
            $values = array();
            foreach ($data['agreementKeys'] as $value) {
                $values[] = $value;
            }
            $object->setAgreementKeys($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAgreedAt()) {
            $data['agreedAt'] = $object->getAgreedAt();
        }
        if (null !== $object->getAgreedBy()) {
            $data['agreedBy'] = $object->getAgreedBy();
        }
        if (null !== $object->getAgreementKeys()) {
            $values = array();
            foreach ($object->getAgreementKeys() as $value) {
                $values[] = $value;
            }
            $data['agreementKeys'] = $values;
        }
        return $data;
    }
}