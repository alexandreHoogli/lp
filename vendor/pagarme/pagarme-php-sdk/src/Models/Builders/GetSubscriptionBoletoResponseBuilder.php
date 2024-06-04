<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetFineResponse;
use PagarmeApiSDKLib\Models\GetInterestResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionBoletoResponse;

/**
 * Builder for model GetSubscriptionBoletoResponse
 *
 * @see GetSubscriptionBoletoResponse
 */
class GetSubscriptionBoletoResponseBuilder
{
    /**
     * @var GetSubscriptionBoletoResponse
     */
    private $instance;

    private function __construct(GetSubscriptionBoletoResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get subscription boleto response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetSubscriptionBoletoResponse());
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
     * Initializes a new get subscription boleto response object.
     */
    public function build(): GetSubscriptionBoletoResponse
    {
        return CoreHelper::clone($this->instance);
    }
}