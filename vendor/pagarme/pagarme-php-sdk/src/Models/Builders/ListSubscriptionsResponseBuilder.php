<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\ListSubscriptionsResponse;
use PagarmeApiSDKLib\Models\PagingResponse;

/**
 * Builder for model ListSubscriptionsResponse
 *
 * @see ListSubscriptionsResponse
 */
class ListSubscriptionsResponseBuilder
{
    /**
     * @var ListSubscriptionsResponse
     */
    private $instance;

    private function __construct(ListSubscriptionsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subscriptions response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Unsets data field.
     */
    public function unsetData(): self
    {
        $this->instance->unsetData();
        return $this;
    }

    /**
     * Sets paging field.
     */
    public function paging(?PagingResponse $value): self
    {
        $this->instance->setPaging($value);
        return $this;
    }

    /**
     * Unsets paging field.
     */
    public function unsetPaging(): self
    {
        $this->instance->unsetPaging();
        return $this;
    }

    /**
     * Initializes a new list subscriptions response object.
     */
    public function build(): ListSubscriptionsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}