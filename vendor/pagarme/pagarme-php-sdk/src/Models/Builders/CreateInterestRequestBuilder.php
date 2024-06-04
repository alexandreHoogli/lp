<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateInterestRequest;

/**
 * Builder for model CreateInterestRequest
 *
 * @see CreateInterestRequest
 */
class CreateInterestRequestBuilder
{
    /**
     * @var CreateInterestRequest
     */
    private $instance;

    private function __construct(CreateInterestRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create interest request Builder object.
     */
    public static function init(int $days, string $type, int $amount): self
    {
        return new self(new CreateInterestRequest($days, $type, $amount));
    }

    /**
     * Initializes a new create interest request object.
     */
    public function build(): CreateInterestRequest
    {
        return CoreHelper::clone($this->instance);
    }
}