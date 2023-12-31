<?php
/**
 * BSeller - B2W Companhia Digital
 *
 * DISCLAIMER
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @copyright     Copyright (c) 2019 B2W Companhia Digital. (http://www.bseller.com.br/)
 * Access https://ajuda.skyhub.com.br/hc/pt-br/requests/new for questions and other requests.
 */

namespace B2W\SkyHub\Contract\Entity;

use B2W\SkyHub\Contract\Entity\Order\PaymentEntityInterface;
use B2W\SkyHub\Contract\Entity\Order\StatusEntityInterface;
use B2W\SkyHub\Model\Resource\Collection;

/**
 * Interface OrderEntityInterface
 * @package B2W\SkyHub\Contract\Entity
 */
interface OrderEntityInterface
{
    const POST_TYPE = 'shop_order';

    /**
     * Save order
     *
     * @return $this
     */
    public function save();

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @param $code
     * @return mixed
     */
    public function setCode($code);

    /**
     * @return mixed
     */
    public function getChannel();

    /**
     * @param $channel
     * @return mixed
     */
    public function setChannel($channel);

    /**
     * @return mixed
     */
    public function getPlacedAt();

    /**
     * @param $placedAt
     * @return mixed
     */
    public function setPlacedAt($placedAt);

    /**
     * @return mixed
     */
    public function getUpdatedAt();

    /**
     * @param $updatedAt
     * @return mixed
     */
    public function setUpdatedAt($updatedAt);

    /**
     * @return mixed
     */
    public function getTotalOrdered();

    /**
     * @param $totalOrdered
     * @return mixed
     */
    public function setTotalOrdered($totalOrdered);

    /**
     * @return mixed
     */
    public function getInterest();

    /**
     * @param $interest
     * @return mixed
     */
    public function setInterest($interest);

    /**
     * @return mixed
     */
    public function getShippingCost();

    /**
     * @param $shippingCost
     * @return mixed
     */
    public function setShippingCost($shippingCost);

    /**
     * @return mixed
     */
    public function getShippingMethod();

    /**
     * @param $shippingMethod
     * @return mixed
     */
    public function setShippingMethod($shippingMethod);

    /**
     * @return mixed
     */
    public function getEstimatedDelivery();

    /**
     * @param $estimatedDelivery
     * @return mixed
     */
    public function setEstimatedDelivery($estimatedDelivery);

    /**
     * @return mixed
     */
    public function getShippingAddress();

    /**
     * @param $shippingAddress
     * @return mixed
     */
    public function setShippingAddress($shippingAddress);

    /**
     * @return mixed
     */
    public function getBillingAddress();

    /**
     * @param $billingAddress
     * @return mixed
     */
    public function setBillingAddress($billingAddress);

    /**
     * @return mixed
     */
    public function getCustomer();

    /**
     * @param $customer
     * @return mixed
     */
    public function setCustomer($customer);

    /**
     * @return mixed
     */
    public function getItems();

    /**
     * @param $items
     * @return mixed
     */
    public function setItems($items);

    /**
     * @return mixed
     */
    public function getStatus();

    /**
     * @param $status
     * @return mixed
     */
    public function setStatus(StatusEntityInterface $status);

    /**
     * @return Collection
     */
    public function getInvoices();

    /**
     * @param $invoices
     * @return mixed
     */
    public function setInvoices($invoices);

    /**
     * @return mixed
     */
    public function getShipments();

    /**
     * @param $shipments
     * @return mixed
     */
    public function setShipments($shipments);

    /**
     * @return mixed
     */
    public function getSyncStatus();

    /**
     * @param $syncStatus
     * @return mixed
     */
    public function setSyncStatus($syncStatus);

    /**
     * @return mixed
     */
    public function getCalculationType();

    /**
     * @param $calculationType
     * @return mixed
     */
    public function setCalculationType($calculationType);

    /**
     * @return mixed
     */
    public function getShippingCarrier();

    /**
     * @param $shippingCarrier
     * @return mixed
     */
    public function setShippingCarrier($shippingCarrier);

    /**
     * @return mixed
     */
    public function getTags();

    /**
     * @param $tags
     * @return mixed
     */
    public function setTags($tags);

    /**
     * Get additional data. If key is set returns this specific, else return full additional data
     *
     * @param null $key
     * @return mixed
     */
    public function getAdditionalData($key = null);

    /**
     * @param $key
     * @param null $value
     * @return mixed
     */
    public function setAdditionalData($key, $value);

    /**
     * @return PaymentEntityInterface
     */
    public function getPayments();

    /**
     * @param PaymentEntityInterface $payments
     */
    public function setPayments($payments);

    /**
     * @return mixed
     */
    public function getEstimatedDeliveryShift();

    /**
     * @param $estimated_delivery_shift
     * @return mixed
     */
    public function setEstimatedDeliveryShift($estimated_delivery_shift);
}
