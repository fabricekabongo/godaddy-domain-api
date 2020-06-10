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
class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\Contact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\Contact';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\Contact();
        if (\array_key_exists('addressMailing', $data)) {
            $object->setAddressMailing($this->denormalizer->denormalize($data['addressMailing'], 'GoDaddy\\Domain\\Api\\Model\\Address', 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('fax', $data)) {
            $object->setFax($data['fax']);
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('nameFirst', $data)) {
            $object->setNameFirst($data['nameFirst']);
        }
        if (\array_key_exists('nameLast', $data)) {
            $object->setNameLast($data['nameLast']);
        }
        if (\array_key_exists('nameMiddle', $data)) {
            $object->setNameMiddle($data['nameMiddle']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddressMailing()) {
            $data['addressMailing'] = $this->normalizer->normalize($object->getAddressMailing(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if (null !== $object->getJobTitle()) {
            $data['jobTitle'] = $object->getJobTitle();
        }
        if (null !== $object->getNameFirst()) {
            $data['nameFirst'] = $object->getNameFirst();
        }
        if (null !== $object->getNameLast()) {
            $data['nameLast'] = $object->getNameLast();
        }
        if (null !== $object->getNameMiddle()) {
            $data['nameMiddle'] = $object->getNameMiddle();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        return $data;
    }
}