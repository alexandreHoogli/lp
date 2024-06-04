<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateAddressRequest;

/**
 * Builder for model UpdateAddressRequest
 *
 * @see UpdateAddressRequest
 */
class UpdateAddressRequestBuilder
{
    /**
     * @var UpdateAddressRequest
     */
    private $instance;

    private function __construct(UpdateAddressRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update address request Builder object.
     */
    public static function init(string $number, string $complement, array $metadata, string $line2): self
    {
        return new self(new UpdateAddressRequest($number, $complement, $metadata, $line2));
    }

    /**
     * Initializes a new update address request object.
     */
    public function build(): UpdateAddressRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
