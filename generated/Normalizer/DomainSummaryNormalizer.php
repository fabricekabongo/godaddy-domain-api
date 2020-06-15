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
class DomainSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'GoDaddy\\Domain\\Api\\Model\\DomainSummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'GoDaddy\\Domain\\Api\\Model\\DomainSummary';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \GoDaddy\Domain\Api\Model\DomainSummary();
        if (\array_key_exists('authCode', $data)) {
            $object->setAuthCode($data['authCode']);
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
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['createdAt']));
        }
        if (\array_key_exists('deletedAt', $data)) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['deletedAt']));
        }
        if (\array_key_exists('transferAwayEligibleAt', $data)) {
            $object->setTransferAwayEligibleAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['transferAwayEligibleAt']));
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('expirationProtected', $data)) {
            $object->setExpirationProtected($data['expirationProtected']);
        }
        if (\array_key_exists('expires', $data)) {
            $object->setExpires(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['expires']));
        }
        if (\array_key_exists('exposeWhois', $data)) {
            $object->setExposeWhois($data['exposeWhois']);
        }
        if (\array_key_exists('holdRegistrar', $data)) {
            $object->setHoldRegistrar($data['holdRegistrar']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('nameServers', $data) && $data['nameServers'] !== null) {
            $values = array();
            foreach ($data['nameServers'] as $value) {
                $values[] = $value;
            }
            $object->setNameServers($values);
        }
        elseif (\array_key_exists('nameServers', $data) && $data['nameServers'] === null) {
            $object->setNameServers(null);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
        }
        if (\array_key_exists('renewAuto', $data)) {
            $object->setRenewAuto($data['renewAuto']);
        }
        if (\array_key_exists('renewDeadline', $data)) {
            $object->setRenewDeadline(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['renewDeadline']));
        }
        if (\array_key_exists('renewable', $data)) {
            $object->setRenewable($data['renewable']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('transferProtected', $data)) {
            $object->setTransferProtected($data['transferProtected']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthCode()) {
            $data['authCode'] = $object->getAuthCode();
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
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getDeletedAt()) {
            $data['deletedAt'] = $object->getDeletedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getTransferAwayEligibleAt()) {
            $data['transferAwayEligibleAt'] = $object->getTransferAwayEligibleAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getDomainId()) {
            $data['domainId'] = $object->getDomainId();
        }
        if (null !== $object->getExpirationProtected()) {
            $data['expirationProtected'] = $object->getExpirationProtected();
        }
        if (null !== $object->getExpires()) {
            $data['expires'] = $object->getExpires()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getExposeWhois()) {
            $data['exposeWhois'] = $object->getExposeWhois();
        }
        if (null !== $object->getHoldRegistrar()) {
            $data['holdRegistrar'] = $object->getHoldRegistrar();
        }
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
        if (null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if (null !== $object->getRenewAuto()) {
            $data['renewAuto'] = $object->getRenewAuto();
        }
        if (null !== $object->getRenewDeadline()) {
            $data['renewDeadline'] = $object->getRenewDeadline()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getRenewable()) {
            $data['renewable'] = $object->getRenewable();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTransferProtected()) {
            $data['transferProtected'] = $object->getTransferProtected();
        }
        return $data;
    }
}