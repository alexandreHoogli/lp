<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * The card payment contactless request
 */
class CreateCardPaymentContactlessRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var CreateApplePayRequest|null
     */
    private $applePay;

    /**
     * @var CreateGooglePayRequest|null
     */
    private $googlePay;

    /**
     * @var CreateEmvDecryptRequest|null
     */
    private $emv;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Type.
     * The authentication type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The authentication type
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Apple Pay.
     * The ApplePay encrypted request
     */
    public function getApplePay(): ?CreateApplePayRequest
    {
        return $this->applePay;
    }

    /**
     * Sets Apple Pay.
     * The ApplePay encrypted request
     *
     * @maps apple_pay
     */
    public function setApplePay(?CreateApplePayRequest $applePay): void
    {
        $this->applePay = $applePay;
    }

    /**
     * Returns Google Pay.
     * The GooglePay encrypted request
     */
    public function getGooglePay(): ?CreateGooglePayRequest
    {
        return $this->googlePay;
    }

    /**
     * Sets Google Pay.
     * The GooglePay encrypted request
     *
     * @maps google_pay
     */
    public function setGooglePay(?CreateGooglePayRequest $googlePay): void
    {
        $this->googlePay = $googlePay;
    }

    /**
     * Returns Emv.
     * The Emv encrypted request
     */
    public function getEmv(): ?CreateEmvDecryptRequest
    {
        return $this->emv;
    }

    /**
     * Sets Emv.
     * The Emv encrypted request
     *
     * @maps emv
     */
    public function setEmv(?CreateEmvDecryptRequest $emv): void
    {
        $this->emv = $emv;
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
        $json['type']           = $this->type;
        if (isset($this->applePay)) {
            $json['apple_pay']  = $this->applePay;
        }
        if (isset($this->googlePay)) {
            $json['google_pay'] = $this->googlePay;
        }
        if (isset($this->emv)) {
            $json['emv']        = $this->emv;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}