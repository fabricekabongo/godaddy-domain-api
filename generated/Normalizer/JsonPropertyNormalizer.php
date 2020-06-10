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
class JsonPropertyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\JsonProperty';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\JsonProperty';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\JsonProperty();
        if (\array_key_exists('defaultValue', $data)) {
            $object->setDefaultValue($data['defaultValue']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('items', $data)) {
            $object->setItems($this->denormalizer->denormalize($data['items'], 'GoDaddy\\Domain\\Api\\Model\\JsonPropertyItems', 'json', $context));
        }
        if (\array_key_exists('maxItems', $data)) {
            $object->setMaxItems($data['maxItems']);
        }
        if (\array_key_exists('maximum', $data)) {
            $object->setMaximum($data['maximum']);
        }
        if (\array_key_exists('minItems', $data)) {
            $object->setMinItems($data['minItems']);
        }
        if (\array_key_exists('minimum', $data)) {
            $object->setMinimum($data['minimum']);
        }
        if (\array_key_exists('pattern', $data)) {
            $object->setPattern($data['pattern']);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDefaultValue()) {
            $data['defaultValue'] = $object->getDefaultValue();
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getItems()) {
            $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }
        if (null !== $object->getMaxItems()) {
            $data['maxItems'] = $object->getMaxItems();
        }
        if (null !== $object->getMaximum()) {
            $data['maximum'] = $object->getMaximum();
        }
        if (null !== $object->getMinItems()) {
            $data['minItems'] = $object->getMinItems();
        }
        if (null !== $object->getMinimum()) {
            $data['minimum'] = $object->getMinimum();
        }
        if (null !== $object->getPattern()) {
            $data['pattern'] = $object->getPattern();
        }
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}