<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateUsageRequest;

/**
 * Builder for model CreateUsageRequest
 *
 * @see CreateUsageRequest
 */
class CreateUsageRequestBuilder
{
    /**
     * @var CreateUsageRequest
     */
    private $instance;

    private function __construct(CreateUsageRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create usage request Builder object.
     */
    public static function init(int $quantity, string $description, \DateTime $usedAt): self
    {
        return new self(new CreateUsageRequest($quantity, $description, $usedAt));
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets group field.
     */
    public function group(?string $value): self
    {
        $this->instance->setGroup($value);
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
     * Initializes a new create usage request object.
     */
    public function build(): CreateUsageRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
