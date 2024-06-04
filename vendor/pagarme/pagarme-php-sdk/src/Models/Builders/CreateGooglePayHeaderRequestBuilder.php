<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateGooglePayHeaderRequest;

/**
 * Builder for model CreateGooglePayHeaderRequest
 *
 * @see CreateGooglePayHeaderRequest
 */
class CreateGooglePayHeaderRequestBuilder
{
    /**
     * @var CreateGooglePayHeaderRequest
     */
    private $instance;

    private function __construct(CreateGooglePayHeaderRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create google pay header request Builder object.
     */
    public static function init(string $ephemeralPublicKey): self
    {
        return new self(new CreateGooglePayHeaderRequest($ephemeralPublicKey));
    }

    /**
     * Initializes a new create google pay header request object.
     */
    public function build(): CreateGooglePayHeaderRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
