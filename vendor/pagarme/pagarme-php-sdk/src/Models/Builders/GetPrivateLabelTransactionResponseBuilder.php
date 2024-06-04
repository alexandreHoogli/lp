<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetAntifraudResponse;
use PagarmeApiSDKLib\Models\GetCardResponse;
use PagarmeApiSDKLib\Models\GetFineResponse;
use PagarmeApiSDKLib\Models\GetGatewayResponseResponse;
use PagarmeApiSDKLib\Models\GetInterestResponse;
use PagarmeApiSDKLib\Models\GetPrivateLabelTransactionResponse;

/**
 * Builder for model GetPrivateLabelTransactionResponse
 *
 * @see GetPrivateLabelTransactionResponse
 */
class GetPrivateLabelTransactionResponseBuilder
{
    /**
     * @var GetPrivateLabelTransactionResponse
     */
    private $instance;

    private function __construct(GetPrivateLabelTransactionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get private label transaction response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetPrivateLabelTransactionResponse());
    }

    /**
     * Sets gateway id field.
     */
    public function gatewayId(?string $value): self
    {
        $this->instance->setGatewayId($value);
        return $this;
    }

    /**
     * Unsets gateway id field.
     */
    public function unsetGatewayId(): self
    {
        $this->instance->unsetGatewayId();
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets success field.
     */
    public function success(?bool $value): self
    {
        $this->instance->setSuccess($value);
        return $this;
    }

    /**
     * Unsets success field.
     */
    public function unsetSuccess(): self
    {
        $this->instance->unsetSuccess();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Unsets updated at field.
     */
    public function unsetUpdatedAt(): self
    {
        $this->instance->unsetUpdatedAt();
        return $this;
    }

    /**
     * Sets attempt count field.
     */
    public function attemptCount(?int $value): self
    {
        $this->instance->setAttemptCount($value);
        return $this;
    }

    /**
     * Unsets attempt count field.
     */
    public function unsetAttemptCount(): self
    {
        $this->instance->unsetAttemptCount();
        return $this;
    }

    /**
     * Sets max attempts field.
     */
    public function maxAttempts(?int $value): self
    {
        $this->instance->setMaxAttempts($value);
        return $this;
    }

    /**
     * Unsets max attempts field.
     */
    public function unsetMaxAttempts(): self
    {
        $this->instance->unsetMaxAttempts();
        return $this;
    }

    /**
     * Sets splits field.
     */
    public function splits(?array $value): self
    {
        $this->instance->setSplits($value);
        return $this;
    }

    /**
     * Unsets splits field.
     */
    public function unsetSplits(): self
    {
        $this->instance->unsetSplits();
        return $this;
    }

    /**
     * Sets next attempt field.
     */
    public function nextAttempt(?\DateTime $value): self
    {
        $this->instance->setNextAttempt($value);
        return $this;
    }

    /**
     * Unsets next attempt field.
     */
    public function unsetNextAttempt(): self
    {
        $this->instance->unsetNextAttempt();
        return $this;
    }

    /**
     * Sets transaction type field.
     */
    public function transactionType(?string $value): self
    {
        $this->instance->setTransactionType($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets gateway response field.
     */
    public function gatewayResponse(?GetGatewayResponseResponse $value): self
    {
        $this->instance->setGatewayResponse($value);
        return $this;
    }

    /**
     * Unsets gateway response field.
     */
    public function unsetGatewayResponse(): self
    {
        $this->instance->unsetGatewayResponse();
        return $this;
    }

    /**
     * Sets antifraud response field.
     */
    public function antifraudResponse(?GetAntifraudResponse $value): self
    {
        $this->instance->setAntifraudResponse($value);
        return $this;
    }

    /**
     * Unsets antifraud response field.
     */
    public function unsetAntifraudResponse(): self
    {
        $this->instance->unsetAntifraudResponse();
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Unsets metadata field.
     */
    public function unsetMetadata(): self
    {
        $this->instance->unsetMetadata();
        return $this;
    }

    /**
     * Sets split field.
     */
    public function split(?array $value): self
    {
        $this->instance->setSplit($value);
        return $this;
    }

    /**
     * Unsets split field.
     */
    public function unsetSplit(): self
    {
        $this->instance->unsetSplit();
        return $this;
    }

    /**
     * Sets interest field.
     */
    public function interest(?GetInterestResponse $value): self
    {
        $this->instance->setInterest($value);
        return $this;
    }

    /**
     * Unsets interest field.
     */
    public function unsetInterest(): self
    {
        $this->instance->unsetInterest();
        return $this;
    }

    /**
     * Sets fine field.
     */
    public function fine(?GetFineResponse $value): self
    {
        $this->instance->setFine($value);
        return $this;
    }

    /**
     * Unsets fine field.
     */
    public function unsetFine(): self
    {
        $this->instance->unsetFine();
        return $this;
    }

    /**
     * Sets max days to pay past due field.
     */
    public function maxDaysToPayPastDue(?int $value): self
    {
        $this->instance->setMaxDaysToPayPastDue($value);
        return $this;
    }

    /**
     * Unsets max days to pay past due field.
     */
    public function unsetMaxDaysToPayPastDue(): self
    {
        $this->instance->unsetMaxDaysToPayPastDue();
        return $this;
    }

    /**
     * Sets statement descriptor field.
     */
    public function statementDescriptor(?string $value): self
    {
        $this->instance->setStatementDescriptor($value);
        return $this;
    }

    /**
     * Unsets statement descriptor field.
     */
    public function unsetStatementDescriptor(): self
    {
        $this->instance->unsetStatementDescriptor();
        return $this;
    }

    /**
     * Sets acquirer name field.
     */
    public function acquirerName(?string $value): self
    {
        $this->instance->setAcquirerName($value);
        return $this;
    }

    /**
     * Unsets acquirer name field.
     */
    public function unsetAcquirerName(): self
    {
        $this->instance->unsetAcquirerName();
        return $this;
    }

    /**
     * Sets acquirer affiliation code field.
     */
    public function acquirerAffiliationCode(?string $value): self
    {
        $this->instance->setAcquirerAffiliationCode($value);
        return $this;
    }

    /**
     * Unsets acquirer affiliation code field.
     */
    public function unsetAcquirerAffiliationCode(): self
    {
        $this->instance->unsetAcquirerAffiliationCode();
        return $this;
    }

    /**
     * Sets acquirer tid field.
     */
    public function acquirerTid(?string $value): self
    {
        $this->instance->setAcquirerTid($value);
        return $this;
    }

    /**
     * Unsets acquirer tid field.
     */
    public function unsetAcquirerTid(): self
    {
        $this->instance->unsetAcquirerTid();
        return $this;
    }

    /**
     * Sets acquirer nsu field.
     */
    public function acquirerNsu(?string $value): self
    {
        $this->instance->setAcquirerNsu($value);
        return $this;
    }

    /**
     * Unsets acquirer nsu field.
     */
    public function unsetAcquirerNsu(): self
    {
        $this->instance->unsetAcquirerNsu();
        return $this;
    }

    /**
     * Sets acquirer auth code field.
     */
    public function acquirerAuthCode(?string $value): self
    {
        $this->instance->setAcquirerAuthCode($value);
        return $this;
    }

    /**
     * Unsets acquirer auth code field.
     */
    public function unsetAcquirerAuthCode(): self
    {
        $this->instance->unsetAcquirerAuthCode();
        return $this;
    }

    /**
     * Sets operation type field.
     */
    public function operationType(?string $value): self
    {
        $this->instance->setOperationType($value);
        return $this;
    }

    /**
     * Unsets operation type field.
     */
    public function unsetOperationType(): self
    {
        $this->instance->unsetOperationType();
        return $this;
    }

    /**
     * Sets card field.
     */
    public function card(?GetCardResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Unsets card field.
     */
    public function unsetCard(): self
    {
        $this->instance->unsetCard();
        return $this;
    }

    /**
     * Sets acquirer message field.
     */
    public function acquirerMessage(?string $value): self
    {
        $this->instance->setAcquirerMessage($value);
        return $this;
    }

    /**
     * Unsets acquirer message field.
     */
    public function unsetAcquirerMessage(): self
    {
        $this->instance->unsetAcquirerMessage();
        return $this;
    }

    /**
     * Sets acquirer return code field.
     */
    public function acquirerReturnCode(?string $value): self
    {
        $this->instance->setAcquirerReturnCode($value);
        return $this;
    }

    /**
     * Unsets acquirer return code field.
     */
    public function unsetAcquirerReturnCode(): self
    {
        $this->instance->unsetAcquirerReturnCode();
        return $this;
    }

    /**
     * Sets installments field.
     */
    public function installments(?int $value): self
    {
        $this->instance->setInstallments($value);
        return $this;
    }

    /**
     * Unsets installments field.
     */
    public function unsetInstallments(): self
    {
        $this->instance->unsetInstallments();
        return $this;
    }

    /**
     * Initializes a new get private label transaction response object.
     */
    public function build(): GetPrivateLabelTransactionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
