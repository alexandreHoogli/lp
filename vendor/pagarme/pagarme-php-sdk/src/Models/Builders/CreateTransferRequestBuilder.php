<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateTransferRequest;

/**
 * Builder for model CreateTransferRequest
 *
 * @see CreateTransferRequest
 */
class CreateTransferRequestBuilder
{
    /**
     * @var CreateTransferRequest
     */
    private $instance;

    private function __construct(CreateTransferRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create transfer request Builder object.
     */
    public static function init(int $amount, array $metadata): self
    {
        return new self(new CreateTransferRequest($amount, $metadata));
    }

    /**
     * Initializes a new create transfer request object.
     */
    public function build(): CreateTransferRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
