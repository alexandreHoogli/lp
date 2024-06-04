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
 * Contains the settings for creating a boleto payment
 */
class CreateBoletoPaymentRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $retries;

    /**
     * @var array
     */
    private $bank = [];

    /**
     * @var string
     */
    private $instructions;

    /**
     * @var array
     */
    private $dueAt = [];

    /**
     * @var CreateAddressRequest
     */
    private $billingAddress;

    /**
     * @var array
     */
    private $billingAddressId = [];

    /**
     * @var array
     */
    private $nossoNumero = [];

    /**
     * @var string
     */
    private $documentNumber;

    /**
     * @var string
     */
    private $statementDescriptor;

    /**
     * @var array
     */
    private $interest = [];

    /**
     * @var array
     */
    private $fine = [];

    /**
     * @var array
     */
    private $maxDaysToPayPastDue = [];

    /**
     * @param int $retries
     * @param string $instructions
     * @param CreateAddressRequest $billingAddress
     * @param string $documentNumber
     * @param string $statementDescriptor
     */
    public function __construct(
        int $retries,
        string $instructions,
        CreateAddressRequest $billingAddress,
        string $documentNumber,
        string $statementDescriptor
    ) {
        $this->retries = $retries;
        $this->instructions = $instructions;
        $this->billingAddress = $billingAddress;
        $this->documentNumber = $documentNumber;
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * Returns Retries.
     * Number of retries
     */
    public function getRetries(): int
    {
        return $this->retries;
    }

    /**
     * Sets Retries.
     * Number of retries
     *
     * @required
     * @maps retries
     */
    public function setRetries(int $retries): void
    {
        $this->retries = $retries;
    }

    /**
     * Returns Bank.
     * The bank code, containing three characters. The available codes are on the API specification
     */
    public function getBank(): ?string
    {
        if (count($this->bank) == 0) {
            return null;
        }
        return $this->bank['value'];
    }

    /**
     * Sets Bank.
     * The bank code, containing three characters. The available codes are on the API specification
     *
     * @maps bank
     */
    public function setBank(?string $bank): void
    {
        $this->bank['value'] = $bank;
    }

    /**
     * Unsets Bank.
     * The bank code, containing three characters. The available codes are on the API specification
     */
    public function unsetBank(): void
    {
        $this->bank = [];
    }

    /**
     * Returns Instructions.
     * The instructions field that will be printed on the boleto.
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * Sets Instructions.
     * The instructions field that will be printed on the boleto.
     *
     * @required
     * @maps instructions
     */
    public function setInstructions(string $instructions): void
    {
        $this->instructions = $instructions;
    }

    /**
     * Returns Due At.
     * Boleto due date
     */
    public function getDueAt(): ?\DateTime
    {
        if (count($this->dueAt) == 0) {
            return null;
        }
        return $this->dueAt['value'];
    }

    /**
     * Sets Due At.
     * Boleto due date
     *
     * @maps due_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDueAt(?\DateTime $dueAt): void
    {
        $this->dueAt['value'] = $dueAt;
    }

    /**
     * Unsets Due At.
     * Boleto due date
     */
    public function unsetDueAt(): void
    {
        $this->dueAt = [];
    }

    /**
     * Returns Billing Address.
     * Card's billing address
     */
    public function getBillingAddress(): CreateAddressRequest
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Card's billing address
     *
     * @required
     * @maps billing_address
     */
    public function setBillingAddress(CreateAddressRequest $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing Address Id.
     * The address id for the billing address
     */
    public function getBillingAddressId(): ?string
    {
        if (count($this->billingAddressId) == 0) {
            return null;
        }
        return $this->billingAddressId['value'];
    }

    /**
     * Sets Billing Address Id.
     * The address id for the billing address
     *
     * @maps billing_address_id
     */
    public function setBillingAddressId(?string $billingAddressId): void
    {
        $this->billingAddressId['value'] = $billingAddressId;
    }

    /**
     * Unsets Billing Address Id.
     * The address id for the billing address
     */
    public function unsetBillingAddressId(): void
    {
        $this->billingAddressId = [];
    }

    /**
     * Returns Nosso Numero.
     * Customer identification number with the bank
     */
    public function getNossoNumero(): ?string
    {
        if (count($this->nossoNumero) == 0) {
            return null;
        }
        return $this->nossoNumero['value'];
    }

    /**
     * Sets Nosso Numero.
     * Customer identification number with the bank
     *
     * @maps nosso_numero
     */
    public function setNossoNumero(?string $nossoNumero): void
    {
        $this->nossoNumero['value'] = $nossoNumero;
    }

    /**
     * Unsets Nosso Numero.
     * Customer identification number with the bank
     */
    public function unsetNossoNumero(): void
    {
        $this->nossoNumero = [];
    }

    /**
     * Returns Document Number.
     * Boleto identification
     */
    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }

    /**
     * Sets Document Number.
     * Boleto identification
     *
     * @required
     * @maps document_number
     */
    public function setDocumentNumber(string $documentNumber): void
    {
        $this->documentNumber = $documentNumber;
    }

    /**
     * Returns Statement Descriptor.
     * Soft Descriptor
     */
    public function getStatementDescriptor(): string
    {
        return $this->statementDescriptor;
    }

    /**
     * Sets Statement Descriptor.
     * Soft Descriptor
     *
     * @required
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(string $statementDescriptor): void
    {
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * Returns Interest.
     */
    public function getInterest(): ?CreateInterestRequest
    {
        if (count($this->interest) == 0) {
            return null;
        }
        return $this->interest['value'];
    }

    /**
     * Sets Interest.
     *
     * @maps interest
     */
    public function setInterest(?CreateInterestRequest $interest): void
    {
        $this->interest['value'] = $interest;
    }

    /**
     * Unsets Interest.
     */
    public function unsetInterest(): void
    {
        $this->interest = [];
    }

    /**
     * Returns Fine.
     */
    public function getFine(): ?CreateFineRequest
    {
        if (count($this->fine) == 0) {
            return null;
        }
        return $this->fine['value'];
    }

    /**
     * Sets Fine.
     *
     * @maps fine
     */
    public function setFine(?CreateFineRequest $fine): void
    {
        $this->fine['value'] = $fine;
    }

    /**
     * Unsets Fine.
     */
    public function unsetFine(): void
    {
        $this->fine = [];
    }

    /**
     * Returns Max Days to Pay Past Due.
     */
    public function getMaxDaysToPayPastDue(): ?int
    {
        if (count($this->maxDaysToPayPastDue) == 0) {
            return null;
        }
        return $this->maxDaysToPayPastDue['value'];
    }

    /**
     * Sets Max Days to Pay Past Due.
     *
     * @maps max_days_to_pay_past_due
     */
    public function setMaxDaysToPayPastDue(?int $maxDaysToPayPastDue): void
    {
        $this->maxDaysToPayPastDue['value'] = $maxDaysToPayPastDue;
    }

    /**
     * Unsets Max Days to Pay Past Due.
     */
    public function unsetMaxDaysToPayPastDue(): void
    {
        $this->maxDaysToPayPastDue = [];
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
        $json['retries']                      = $this->retries;
        if (!empty($this->bank)) {
            $json['bank']                     = $this->bank['value'];
        }
        $json['instructions']                 = $this->instructions;
        if (!empty($this->dueAt)) {
            $json['due_at']                   = DateTimeHelper::toRfc3339DateTime($this->dueAt['value']);
        }
        $json['billing_address']              = $this->billingAddress;
        if (!empty($this->billingAddressId)) {
            $json['billing_address_id']       = $this->billingAddressId['value'];
        }
        if (!empty($this->nossoNumero)) {
            $json['nosso_numero']             = $this->nossoNumero['value'];
        }
        $json['document_number']              = $this->documentNumber;
        $json['statement_descriptor']         = $this->statementDescriptor;
        if (!empty($this->interest)) {
            $json['interest']                 = $this->interest['value'];
        }
        if (!empty($this->fine)) {
            $json['fine']                     = $this->fine['value'];
        }
        if (!empty($this->maxDaysToPayPastDue)) {
            $json['max_days_to_pay_past_due'] = $this->maxDaysToPayPastDue['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}