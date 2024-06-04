<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Shipping data
 */
class CreateShippingRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $recipientName;

    /**
     * @var string
     */
    private $recipientPhone;

    /**
     * @var string
     */
    private $addressId;

    /**
     * @var CreateAddressRequest
     */
    private $address;

    /**
     * @var \DateTime|null
     */
    private $maxDeliveryDate;

    /**
     * @var \DateTime|null
     */
    private $estimatedDeliveryDate;

    /**
     * @var string
     */
    private $type;

    /**
     * @param int $amount
     * @param string $description
     * @param string $recipientName
     * @param string $recipientPhone
     * @param string $addressId
     * @param CreateAddressRequest $address
     * @param string $type
     */
    public function __construct(
        int $amount,
        string $description,
        string $recipientName,
        string $recipientPhone,
        string $addressId,
        CreateAddressRequest $address,
        string $type
    ) {
        $this->amount = $amount;
        $this->description = $description;
        $this->recipientName = $recipientName;
        $this->recipientPhone = $recipientPhone;
        $this->addressId = $addressId;
        $this->address = $address;
        $this->type = $type;
    }

    /**
     * Returns Amount.
     * Shipping amount
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Shipping amount
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Recipient Name.
     * Recipient name
     */
    public function getRecipientName(): string
    {
        return $this->recipientName;
    }

    /**
     * Sets Recipient Name.
     * Recipient name
     *
     * @required
     * @maps recipient_name
     */
    public function setRecipientName(string $recipientName): void
    {
        $this->recipientName = $recipientName;
    }

    /**
     * Returns Recipient Phone.
     * Recipient phone number
     */
    public function getRecipientPhone(): string
    {
        return $this->recipientPhone;
    }

    /**
     * Sets Recipient Phone.
     * Recipient phone number
     *
     * @required
     * @maps recipient_phone
     */
    public function setRecipientPhone(string $recipientPhone): void
    {
        $this->recipientPhone = $recipientPhone;
    }

    /**
     * Returns Address Id.
     * The id of the address that will be used for shipping
     */
    public function getAddressId(): string
    {
        return $this->addressId;
    }

    /**
     * Sets Address Id.
     * The id of the address that will be used for shipping
     *
     * @required
     * @maps address_id
     */
    public function setAddressId(string $addressId): void
    {
        $this->addressId = $addressId;
    }

    /**
     * Returns Address.
     * Address data
     */
    public function getAddress(): CreateAddressRequest
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address data
     *
     * @required
     * @maps address
     */
    public function setAddress(CreateAddressRequest $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Max Delivery Date.
     * Data máxima de entrega
     */
    public function getMaxDeliveryDate(): ?\DateTime
    {
        return $this->maxDeliveryDate;
    }

    /**
     * Sets Max Delivery Date.
     * Data máxima de entrega
     *
     * @maps max_delivery_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setMaxDeliveryDate(?\DateTime $maxDeliveryDate): void
    {
        $this->maxDeliveryDate = $maxDeliveryDate;
    }

    /**
     * Returns Estimated Delivery Date.
     * Prazo estimado de entrega
     */
    public function getEstimatedDeliveryDate(): ?\DateTime
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Sets Estimated Delivery Date.
     * Prazo estimado de entrega
     *
     * @maps estimated_delivery_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEstimatedDeliveryDate(?\DateTime $estimatedDeliveryDate): void
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    /**
     * Returns Type.
     * Shipping type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Shipping type
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['amount']                      = $this->amount;
        $json['description']                 = $this->description;
        $json['recipient_name']              = $this->recipientName;
        $json['recipient_phone']             = $this->recipientPhone;
        $json['address_id']                  = $this->addressId;
        $json['address']                     = $this->address;
        if (isset($this->maxDeliveryDate)) {
            $json['max_delivery_date']       = DateTimeHelper::toRfc3339DateTime($this->maxDeliveryDate);
        }
        if (isset($this->estimatedDeliveryDate)) {
            $json['estimated_delivery_date'] = DateTimeHelper::toRfc3339DateTime($this->estimatedDeliveryDate);
        }
        $json['type']                        = $this->type;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
