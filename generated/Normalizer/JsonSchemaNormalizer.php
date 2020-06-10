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
class JsonSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\JsonSchema';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\JsonSchema';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\JsonSchema();
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('models', $data)) {
            $object->setModels($this->denormalizer->denormalize($data['models'], 'GoDaddy\\Domain\\Api\\Model\\JsonSchemaModels', 'json', $context));
        }
        if (\array_key_exists('properties', $data)) {
            $object->setProperties($this->denormalizer->denormalize($data['properties'], 'GoDaddy\\Domain\\Api\\Model\\JsonSchemaProperties', 'json', $context));
        }
        if (\array_key_exists('required', $data)) {
            $values = array();
            foreach ($data['required'] as $value) {
                $values[] = $value;
            }
            $object->setRequired($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getModels()) {
            $data['models'] = $this->normalizer->normalize($object->getModels(), 'json', $context);
        }
        if (null !== $object->getProperties()) {
            $data['properties'] = $this->normalizer->normalize($object->getProperties(), 'json', $context);
        }
        if (null !== $object->getRequired()) {
            $values = array();
            foreach ($object->getRequired() as $value) {
                $values[] = $value;
            }
            $data['required'] = $values;
        }
        return $data;
    }
}