<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * The Transaction Gateway Response
 */
class GetGatewayResponseResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $code = [];

    /**
     * @var array
     */
    private $errors = [];

    /**
     * Returns Code.
     * The error code
     */
    public function getCode(): ?string
    {
        if (count($this->code) == 0) {
            return null;
        }
        return $this->code['value'];
    }

    /**
     * Sets Code.
     * The error code
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code['value'] = $code;
    }

    /**
     * Unsets Code.
     * The error code
     */
    public function unsetCode(): void
    {
        $this->code = [];
    }

    /**
     * Returns Errors.
     * The gateway response errors list
     *
     * @return GetGatewayErrorResponse[]|null
     */
    public function getErrors(): ?array
    {
        if (count($this->errors) == 0) {
            return null;
        }
        return $this->errors['value'];
    }

    /**
     * Sets Errors.
     * The gateway response errors list
     *
     * @maps errors
     *
     * @param GetGatewayErrorResponse[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors['value'] = $errors;
    }

    /**
     * Unsets Errors.
     * The gateway response errors list
     */
    public function unsetErrors(): void
    {
        $this->errors = [];
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
        if (!empty($this->code)) {
            $json['code']   = $this->code['value'];
        }
        if (!empty($this->errors)) {
            $json['errors'] = $this->errors['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}