<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetWithdrawTargetResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $targetId = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * Returns Target Id.
     */
    public function getTargetId(): ?string
    {
        if (count($this->targetId) == 0) {
            return null;
        }
        return $this->targetId['value'];
    }

    /**
     * Sets Target Id.
     *
     * @maps target_id
     */
    public function setTargetId(?string $targetId): void
    {
        $this->targetId['value'] = $targetId;
    }

    /**
     * Unsets Target Id.
     */
    public function unsetTargetId(): void
    {
        $this->targetId = [];
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     */
    public function unsetType(): void
    {
        $this->type = [];
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
        if (!empty($this->targetId)) {
            $json['target_id'] = $this->targetId['value'];
        }
        if (!empty($this->type)) {
            $json['type']      = $this->type['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
