<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateBankTransferPaymentRequest;

/**
 * Builder for model CreateBankTransferPaymentRequest
 *
 * @see CreateBankTransferPaymentRequest
 */
class CreateBankTransferPaymentRequestBuilder
{
    /**
     * @var CreateBankTransferPaymentRequest
     */
    private $instance;

    private function __construct(CreateBankTransferPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create bank transfer payment request Builder object.
     */
    public static function init(string $bank, int $retries): self
    {
        return new self(new CreateBankTransferPaymentRequest($bank, $retries));
    }

    /**
     * Initializes a new create bank transfer payment request object.
     */
    public function build(): CreateBankTransferPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}