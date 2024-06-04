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
 * Response object for getting a plan
 */
class GetPlanResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $name = [];

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $url = [];

    /**
     * @var array
     */
    private $statementDescriptor = [];

    /**
     * @var array
     */
    private $interval = [];

    /**
     * @var array
     */
    private $intervalCount = [];

    /**
     * @var array
     */
    private $billingType = [];

    /**
     * @var array
     */
    private $paymentMethods = [];

    /**
     * @var array
     */
    private $installments = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $currency = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $updatedAt = [];

    /**
     * @var array
     */
    private $items = [];

    /**
     * @var array
     */
    private $billingDays = [];

    /**
     * @var array
     */
    private $shippable = [];

    /**
     * @var array
     */
    private $metadata = [];

    /**
     * @var array
     */
    private $trialPeriodDays = [];

    /**
     * @var array
     */
    private $minimumPrice = [];

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        if (count($this->name) == 0) {
            return null;
        }
        return $this->name['value'];
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name['value'] = $name;
    }

    /**
     * Unsets Name.
     */
    public function unsetName(): void
    {
        $this->name = [];
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        if (count($this->url) == 0) {
            return null;
        }
        return $this->url['value'];
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url['value'] = $url;
    }

    /**
     * Unsets Url.
     */
    public function unsetUrl(): void
    {
        $this->url = [];
    }

    /**
     * Returns Statement Descriptor.
     */
    public function getStatementDescriptor(): ?string
    {
        if (count($this->statementDescriptor) == 0) {
            return null;
        }
        return $this->statementDescriptor['value'];
    }

    /**
     * Sets Statement Descriptor.
     *
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(?string $statementDescriptor): void
    {
        $this->statementDescriptor['value'] = $statementDescriptor;
    }

    /**
     * Unsets Statement Descriptor.
     */
    public function unsetStatementDescriptor(): void
    {
        $this->statementDescriptor = [];
    }

    /**
     * Returns Interval.
     */
    public function getInterval(): ?string
    {
        if (count($this->interval) == 0) {
            return null;
        }
        return $this->interval['value'];
    }

    /**
     * Sets Interval.
     *
     * @maps interval
     */
    public function setInterval(?string $interval): void
    {
        $this->interval['value'] = $interval;
    }

    /**
     * Unsets Interval.
     */
    public function unsetInterval(): void
    {
        $this->interval = [];
    }

    /**
     * Returns Interval Count.
     */
    public function getIntervalCount(): ?int
    {
        if (count($this->intervalCount) == 0) {
            return null;
        }
        return $this->intervalCount['value'];
    }

    /**
     * Sets Interval Count.
     *
     * @maps interval_count
     */
    public function setIntervalCount(?int $intervalCount): void
    {
        $this->intervalCount['value'] = $intervalCount;
    }

    /**
     * Unsets Interval Count.
     */
    public function unsetIntervalCount(): void
    {
        $this->intervalCount = [];
    }

    /**
     * Returns Billing Type.
     */
    public function getBillingType(): ?string
    {
        if (count($this->billingType) == 0) {
            return null;
        }
        return $this->billingType['value'];
    }

    /**
     * Sets Billing Type.
     *
     * @maps billing_type
     */
    public function setBillingType(?string $billingType): void
    {
        $this->billingType['value'] = $billingType;
    }

    /**
     * Unsets Billing Type.
     */
    public function unsetBillingType(): void
    {
        $this->billingType = [];
    }

    /**
     * Returns Payment Methods.
     *
     * @return string[]|null
     */
    public function getPaymentMethods(): ?array
    {
        if (count($this->paymentMethods) == 0) {
            return null;
        }
        return $this->paymentMethods['value'];
    }

    /**
     * Sets Payment Methods.
     *
     * @maps payment_methods
     *
     * @param string[]|null $paymentMethods
     */
    public function setPaymentMethods(?array $paymentMethods): void
    {
        $this->paymentMethods['value'] = $paymentMethods;
    }

    /**
     * Unsets Payment Methods.
     */
    public function unsetPaymentMethods(): void
    {
        $this->paymentMethods = [];
    }

    /**
     * Returns Installments.
     *
     * @return int[]|null
     */
    public function getInstallments(): ?array
    {
        if (count($this->installments) == 0) {
            return null;
        }
        return $this->installments['value'];
    }

    /**
     * Sets Installments.
     *
     * @maps installments
     *
     * @param int[]|null $installments
     */
    public function setInstallments(?array $installments): void
    {
        $this->installments['value'] = $installments;
    }

    /**
     * Unsets Installments.
     */
    public function unsetInstallments(): void
    {
        $this->installments = [];
    }

    /**
     * Returns Status.
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
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Currency.
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
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency['value'] = $currency;
    }

    /**
     * Unsets Currency.
     */
    public function unsetCurrency(): void
    {
        $this->currency = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        if (count($this->updatedAt) == 0) {
            return null;
        }
        return $this->updatedAt['value'];
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt['value'] = $updatedAt;
    }

    /**
     * Unsets Updated At.
     */
    public function unsetUpdatedAt(): void
    {
        $this->updatedAt = [];
    }

    /**
     * Returns Items.
     *
     * @return GetPlanItemResponse[]|null
     */
    public function getItems(): ?array
    {
        if (count($this->items) == 0) {
            return null;
        }
        return $this->items['value'];
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param GetPlanItemResponse[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items['value'] = $items;
    }

    /**
     * Unsets Items.
     */
    public function unsetItems(): void
    {
        $this->items = [];
    }

    /**
     * Returns Billing Days.
     *
     * @return int[]|null
     */
    public function getBillingDays(): ?array
    {
        if (count($this->billingDays) == 0) {
            return null;
        }
        return $this->billingDays['value'];
    }

    /**
     * Sets Billing Days.
     *
     * @maps billing_days
     *
     * @param int[]|null $billingDays
     */
    public function setBillingDays(?array $billingDays): void
    {
        $this->billingDays['value'] = $billingDays;
    }

    /**
     * Unsets Billing Days.
     */
    public function unsetBillingDays(): void
    {
        $this->billingDays = [];
    }

    /**
     * Returns Shippable.
     */
    public function getShippable(): ?bool
    {
        if (count($this->shippable) == 0) {
            return null;
        }
        return $this->shippable['value'];
    }

    /**
     * Sets Shippable.
     *
     * @maps shippable
     */
    public function setShippable(?bool $shippable): void
    {
        $this->shippable['value'] = $shippable;
    }

    /**
     * Unsets Shippable.
     */
    public function unsetShippable(): void
    {
        $this->shippable = [];
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        if (count($this->metadata) == 0) {
            return null;
        }
        return $this->metadata['value'];
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata['value'] = $metadata;
    }

    /**
     * Unsets Metadata.
     */
    public function unsetMetadata(): void
    {
        $this->metadata = [];
    }

    /**
     * Returns Trial Period Days.
     */
    public function getTrialPeriodDays(): ?int
    {
        if (count($this->trialPeriodDays) == 0) {
            return null;
        }
        return $this->trialPeriodDays['value'];
    }

    /**
     * Sets Trial Period Days.
     *
     * @maps trial_period_days
     */
    public function setTrialPeriodDays(?int $trialPeriodDays): void
    {
        $this->trialPeriodDays['value'] = $trialPeriodDays;
    }

    /**
     * Unsets Trial Period Days.
     */
    public function unsetTrialPeriodDays(): void
    {
        $this->trialPeriodDays = [];
    }

    /**
     * Returns Minimum Price.
     */
    public function getMinimumPrice(): ?int
    {
        if (count($this->minimumPrice) == 0) {
            return null;
        }
        return $this->minimumPrice['value'];
    }

    /**
     * Sets Minimum Price.
     *
     * @maps minimum_price
     */
    public function setMinimumPrice(?int $minimumPrice): void
    {
        $this->minimumPrice['value'] = $minimumPrice;
    }

    /**
     * Unsets Minimum Price.
     */
    public function unsetMinimumPrice(): void
    {
        $this->minimumPrice = [];
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?\DateTime
    {
        if (count($this->deletedAt) == 0) {
            return null;
        }
        return $this->deletedAt['value'];
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt['value'] = $deletedAt;
    }

    /**
     * Unsets Deleted At.
     */
    public function unsetDeletedAt(): void
    {
        $this->deletedAt = [];
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
        if (!empty($this->id)) {
            $json['id']                   = $this->id['value'];
        }
        if (!empty($this->name)) {
            $json['name']                 = $this->name['value'];
        }
        if (!empty($this->description)) {
            $json['description']          = $this->description['value'];
        }
        if (!empty($this->url)) {
            $json['url']                  = $this->url['value'];
        }
        if (!empty($this->statementDescriptor)) {
            $json['statement_descriptor'] = $this->statementDescriptor['value'];
        }
        if (!empty($this->interval)) {
            $json['interval']             = $this->interval['value'];
        }
        if (!empty($this->intervalCount)) {
            $json['interval_count']       = $this->intervalCount['value'];
        }
        if (!empty($this->billingType)) {
            $json['billing_type']         = $this->billingType['value'];
        }
        if (!empty($this->paymentMethods)) {
            $json['payment_methods']      = $this->paymentMethods['value'];
        }
        if (!empty($this->installments)) {
            $json['installments']         = $this->installments['value'];
        }
        if (!empty($this->status)) {
            $json['status']               = $this->status['value'];
        }
        if (!empty($this->currency)) {
            $json['currency']             = $this->currency['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']           = DateTimeHelper::toRfc3339DateTime($this->createdAt['value']);
        }
        if (!empty($this->updatedAt)) {
            $json['updated_at']           = DateTimeHelper::toRfc3339DateTime($this->updatedAt['value']);
        }
        if (!empty($this->items)) {
            $json['items']                = $this->items['value'];
        }
        if (!empty($this->billingDays)) {
            $json['billing_days']         = $this->billingDays['value'];
        }
        if (!empty($this->shippable)) {
            $json['shippable']            = $this->shippable['value'];
        }
        if (!empty($this->metadata)) {
            $json['metadata']             = $this->metadata['value'];
        }
        if (!empty($this->trialPeriodDays)) {
            $json['trial_period_days']    = $this->trialPeriodDays['value'];
        }
        if (!empty($this->minimumPrice)) {
            $json['minimum_price']        = $this->minimumPrice['value'];
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at']           = DateTimeHelper::toRfc3339DateTime($this->deletedAt['value']);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
