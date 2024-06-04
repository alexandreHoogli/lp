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
 * Balance
 */
class GetBalanceResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $currency = [];

    /**
     * @var array
     */
    private $availableAmount = [];

    /**
     * @var array
     */
    private $recipient = [];

    /**
     * @var array
     */
    private $transferredAmount = [];

    /**
     * @var array
     */
    private $waitingFundsAmount = [];

    /**
     * Returns Currency.
     * Currency
     */
    public function getCurrency(): ?string
    {
        if (count($this->currency) == 0) {
            return null;
        }
        return $this->currency['value'];
    }

    /**
     * Sets Currency.
     * Currency
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency['value'] = $currency;
    }

    /**
     * Unsets Currency.
     * Currency
     */
    public function unsetCurrency(): void
    {
        $this->currency = [];
    }

    /**
     * Returns Available Amount.
     * Amount available for transferring
     */
    public function getAvailableAmount(): ?int
    {
        if (count($this->availableAmount) == 0) {
            return null;
        }
        return $this->availableAmount['value'];
    }

    /**
     * Sets Available Amount.
     * Amount available for transferring
     *
     * @maps available_amount
     */
    public function setAvailableAmount(?int $availableAmount): void
    {
        $this->availableAmount['value'] = $availableAmount;
    }

    /**
     * Unsets Available Amount.
     * Amount available for transferring
     */
    public function unsetAvailableAmount(): void
    {
        $this->availableAmount = [];
    }

    /**
     * Returns Recipient.
     * Recipient
     */
    public function getRecipient(): ?GetRecipientResponse
    {
        if (count($this->recipient) == 0) {
            return null;
        }
        return $this->recipient['value'];
    }

    /**
     * Sets Recipient.
     * Recipient
     *
     * @maps recipient
     */
    public function setRecipient(?GetRecipientResponse $recipient): void
    {
        $this->recipient['value'] = $recipient;
    }

    /**
     * Unsets Recipient.
     * Recipient
     */
    public function unsetRecipient(): void
    {
        $this->recipient = [];
    }

    /**
     * Returns Transferred Amount.
     */
    public function getTransferredAmount(): ?int
    {
        if (count($this->transferredAmount) == 0) {
            return null;
        }
        return $this->transferredAmount['value'];
    }

    /**
     * Sets Transferred Amount.
     *
     * @maps transferred_amount
     */
    public function setTransferredAmount(?int $transferredAmount): void
    {
        $this->transferredAmount['value'] = $transferredAmount;
    }

    /**
     * Unsets Transferred Amount.
     */
    public function unsetTransferredAmount(): void
    {
        $this->transferredAmount = [];
    }

    /**
     * Returns Waiting Funds Amount.
     */
    public function getWaitingFundsAmount(): ?int
    {
        if (count($this->waitingFundsAmount) == 0) {
            return null;
        }
        return $this->waitingFundsAmount['value'];
    }

    /**
     * Sets Waiting Funds Amount.
     *
     * @maps waiting_funds_amount
     */
    public function setWaitingFundsAmount(?int $waitingFundsAmount): void
    {
        $this->waitingFundsAmount['value'] = $waitingFundsAmount;
    }

    /**
     * Unsets Waiting Funds Amount.
     */
    public function unsetWaitingFundsAmount(): void
    {
        $this->waitingFundsAmount = [];
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
        if (!empty($this->currency)) {
            $json['currency']             = $this->currency['value'];
        }
        if (!empty($this->availableAmount)) {
            $json['available_amount']     = $this->availableAmount['value'];
        }
        if (!empty($this->recipient)) {
            $json['recipient']            = $this->recipient['value'];
        }
        if (!empty($this->transferredAmount)) {
            $json['transferred_amount']   = $this->transferredAmount['value'];
        }
        if (!empty($this->waitingFundsAmount)) {
            $json['waiting_funds_amount'] = $this->waitingFundsAmount['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
