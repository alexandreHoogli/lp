<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreatePlanRequest;
use PagarmeApiSDKLib\Models\CreatePricingSchemeRequest;

/**
 * Builder for model CreatePlanRequest
 *
 * @see CreatePlanRequest
 */
class CreatePlanRequestBuilder
{
    /**
     * @var CreatePlanRequest
     */
    private $instance;

    private function __construct(CreatePlanRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create plan request Builder object.
     */
    public static function init(
        string $name,
        string $description,
        string $statementDescriptor,
        array $items,
        bool $shippable,
        array $paymentMethods,
        array $installments,
        string $currency,
        string $interval,
        int $intervalCount,
        array $billingDays,
        string $billingType,
        CreatePricingSchemeRequest $pricingScheme,
        array $metadata
    ): self {
        return new self(new CreatePlanRequest(
            $name,
            $description,
            $statementDescriptor,
            $items,
            $shippable,
            $paymentMethods,
            $installments,
            $currency,
            $interval,
            $intervalCount,
            $billingDays,
            $billingType,
            $pricingScheme,
            $metadata
        ));
    }

    /**
     * Sets minimum price field.
     */
    public function minimumPrice(?int $value): self
    {
        $this->instance->setMinimumPrice($value);
        return $this;
    }

    /**
     * Sets cycles field.
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets trial period days field.
     */
    public function trialPeriodDays(?int $value): self
    {
        $this->instance->setTrialPeriodDays($value);
        return $this;
    }

    /**
     * Initializes a new create plan request object.
     */
    public function build(): CreatePlanRequest
    {
        return CoreHelper::clone($this->instance);
    }
}