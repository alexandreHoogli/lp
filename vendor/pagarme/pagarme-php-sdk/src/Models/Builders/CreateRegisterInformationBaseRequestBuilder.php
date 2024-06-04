<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateRegisterInformationBaseRequest;

/**
 * Builder for model CreateRegisterInformationBaseRequest
 *
 * @see CreateRegisterInformationBaseRequest
 */
class CreateRegisterInformationBaseRequestBuilder
{
    /**
     * @var CreateRegisterInformationBaseRequest
     */
    private $instance;

    private function __construct(CreateRegisterInformationBaseRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create register information base request Builder object.
     */
    public static function init(string $email, string $document, string $type, array $phoneNumbers): self
    {
        return new self(new CreateRegisterInformationBaseRequest($email, $document, $type, $phoneNumbers));
    }

    /**
     * Sets site url field.
     */
    public function siteUrl(?string $value): self
    {
        $this->instance->setSiteUrl($value);
        return $this;
    }

    /**
     * Unsets site url field.
     */
    public function unsetSiteUrl(): self
    {
        $this->instance->unsetSiteUrl();
        return $this;
    }

    /**
     * Initializes a new create register information base request object.
     */
    public function build(): CreateRegisterInformationBaseRequest
    {
        return CoreHelper::clone($this->instance);
    }
}