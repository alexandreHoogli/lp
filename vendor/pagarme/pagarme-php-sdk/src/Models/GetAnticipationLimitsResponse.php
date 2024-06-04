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
 * Anticipation limits
 */
class GetAnticipationLimitsResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $max = [];

    /**
     * @var array
     */
    private $min = [];

    /**
     * Returns Max.
     * Max limit
     */
    public function getMax(): ?GetAnticipationLimitResponse
    {
        if (count($this->max) == 0) {
            return null;
        }
        return $this->max['value'];
    }

    /**
     * Sets Max.
     * Max limit
     *
     * @maps max
     */
    public function setMax(?GetAnticipationLimitResponse $max): void
    {
        $this->max['value'] = $max;
    }

    /**
     * Unsets Max.
     * Max limit
     */
    public function unsetMax(): void
    {
        $this->max = [];
    }

    /**
     * Returns Min.
     * Min limit
     */
    public function getMin(): ?GetAnticipationLimitResponse
    {
        if (count($this->min) == 0) {
            return null;
        }
        return $this->min['value'];
    }

    /**
     * Sets Min.
     * Min limit
     *
     * @maps min
     */
    public function setMin(?GetAnticipationLimitResponse $min): void
    {
        $this->min['value'] = $min;
    }

    /**
     * Unsets Min.
     * Min limit
     */
    public function unsetMin(): void
    {
        $this->min = [];
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
        if (!empty($this->max)) {
            $json['max'] = $this->max['value'];
        }
        if (!empty($this->min)) {
            $json['min'] = $this->min['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}