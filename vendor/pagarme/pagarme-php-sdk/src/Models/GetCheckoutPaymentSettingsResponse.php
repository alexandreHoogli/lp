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
 * Checkout Payment Settings Response
 */
class GetCheckoutPaymentSettingsResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $successUrl = [];

    /**
     * @var array
     */
    private $paymentUrl = [];

    /**
     * @var array
     */
    private $acceptedPaymentMethods = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $defaultPaymentMethod = [];

    /**
     * @var array
     */
    private $gatewayAffiliationId = [];

    /**
     * Returns Success Url.
     * Success Url
     */
    public function getSuccessUrl(): ?string
    {
        if (count($this->successUrl) == 0) {
            return null;
        }
        return $this->successUrl['value'];
    }

    /**
     * Sets Success Url.
     * Success Url
     *
     * @maps success_url
     */
    public function setSuccessUrl(?string $successUrl): void
    {
        $this->successUrl['value'] = $successUrl;
    }

    /**
     * Unsets Success Url.
     * Success Url
     */
    public function unsetSuccessUrl(): void
    {
        $this->successUrl = [];
    }

    /**
     * Returns Payment Url.
     * Payment Url
     */
    public function getPaymentUrl(): ?string
    {
        if (count($this->paymentUrl) == 0) {
            return null;
        }
        return $this->paymentUrl['value'];
    }

    /**
     * Sets Payment Url.
     * Payment Url
     *
     * @maps payment_url
     */
    public function setPaymentUrl(?string $paymentUrl): void
    {
        $this->paymentUrl['value'] = $paymentUrl;
    }

    /**
     * Unsets Payment Url.
     * Payment Url
     */
    public function unsetPaymentUrl(): void
    {
        $this->paymentUrl = [];
    }

    /**
     * Returns Accepted Payment Methods.
     * Accepted Payment Methods
     *
     * @return string[]|null
     */
    public function getAcceptedPaymentMethods(): ?array
    {
        if (count($this->acceptedPaymentMethods) == 0) {
            return null;
        }
        return $this->acceptedPaymentMethods['value'];
    }

    /**
     * Sets Accepted Payment Methods.
     * Accepted Payment Methods
     *
     * @maps accepted_payment_methods
     *
     * @param string[]|null $acceptedPaymentMethods
     */
    public function setAcceptedPaymentMethods(?array $acceptedPaymentMethods): void
    {
        $this->acceptedPaymentMethods['value'] = $acceptedPaymentMethods;
    }

    /**
     * Unsets Accepted Payment Methods.
     * Accepted Payment Methods
     */
    public function unsetAcceptedPaymentMethods(): void
    {
        $this->acceptedPaymentMethods = [];
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Status
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Customer.
     * Customer
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        if (count($this->customer) == 0) {
            return null;
        }
        return $this->customer['value'];
    }

    /**
     * Sets Customer.
     * Customer
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer['value'] = $customer;
    }

    /**
     * Unsets Customer.
     * Customer
     */
    public function unsetCustomer(): void
    {
        $this->customer = [];
    }

    /**
     * Returns Amount.
     * Payment amount
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     * Payment amount
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     * Payment amount
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Returns Default Payment Method.
     * Default Payment Method
     */
    public function getDefaultPaymentMethod(): ?string
    {
        if (count($this->defaultPaymentMethod) == 0) {
            return null;
        }
        return $this->defaultPaymentMethod['value'];
    }

    /**
     * Sets Default Payment Method.
     * Default Payment Method
     *
     * @maps default_payment_method
     */
    public function setDefaultPaymentMethod(?string $defaultPaymentMethod): void
    {
        $this->defaultPaymentMethod['value'] = $defaultPaymentMethod;
    }

    /**
     * Unsets Default Payment Method.
     * Default Payment Method
     */
    public function unsetDefaultPaymentMethod(): void
    {
        $this->defaultPaymentMethod = [];
    }

    /**
     * Returns Gateway Affiliation Id.
     * Gateway Affiliation Id
     */
    public function getGatewayAffiliationId(): ?string
    {
        if (count($this->gatewayAffiliationId) == 0) {
            return null;
        }
        return $this->gatewayAffiliationId['value'];
    }

    /**
     * Sets Gateway Affiliation Id.
     * Gateway Affiliation Id
     *
     * @maps gateway_affiliation_id
     */
    public function setGatewayAffiliationId(?string $gatewayAffiliationId): void
    {
        $this->gatewayAffiliationId['value'] = $gatewayAffiliationId;
    }

    /**
     * Unsets Gateway Affiliation Id.
     * Gateway Affiliation Id
     */
    public function unsetGatewayAffiliationId(): void
    {
        $this->gatewayAffiliationId = [];
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
        if (!empty($this->successUrl)) {
            $json['success_url']              = $this->successUrl['value'];
        }
        if (!empty($this->paymentUrl)) {
            $json['payment_url']              = $this->paymentUrl['value'];
        }
        if (!empty($this->acceptedPaymentMethods)) {
            $json['accepted_payment_methods'] = $this->acceptedPaymentMethods['value'];
        }
        if (!empty($this->status)) {
            $json['status']                   = $this->status['value'];
        }
        if (!empty($this->customer)) {
            $json['customer']                 = $this->customer['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']                   = $this->amount['value'];
        }
        if (!empty($this->defaultPaymentMethod)) {
            $json['default_payment_method']   = $this->defaultPaymentMethod['value'];
        }
        if (!empty($this->gatewayAffiliationId)) {
            $json['gateway_affiliation_id']   = $this->gatewayAffiliationId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}