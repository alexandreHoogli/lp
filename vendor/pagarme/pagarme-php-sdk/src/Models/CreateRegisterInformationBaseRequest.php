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
 * Request object for RegisterInformation.
 */
class CreateRegisterInformationBaseRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $document;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $siteUrl = [];

    /**
     * @var CreateRegisterInformationPhoneRequest[]
     */
    private $phoneNumbers;

    /**
     * @param string $email
     * @param string $document
     * @param string $type
     * @param CreateRegisterInformationPhoneRequest[] $phoneNumbers
     */
    public function __construct(string $email, string $document, string $type, array $phoneNumbers)
    {
        $this->email = $email;
        $this->document = $document;
        $this->type = $type;
        $this->phoneNumbers = $phoneNumbers;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Document.
     */
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * Sets Document.
     *
     * @required
     * @maps document
     */
    public function setDocument(string $document): void
    {
        $this->document = $document;
    }

    /**
     * Returns Type.
     * "individual" ou "corporation"
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * "individual" ou "corporation"
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Site Url.
     */
    public function getSiteUrl(): ?string
    {
        if (count($this->siteUrl) == 0) {
            return null;
        }
        return $this->siteUrl['value'];
    }

    /**
     * Sets Site Url.
     *
     * @maps site_url
     */
    public function setSiteUrl(?string $siteUrl): void
    {
        $this->siteUrl['value'] = $siteUrl;
    }

    /**
     * Unsets Site Url.
     */
    public function unsetSiteUrl(): void
    {
        $this->siteUrl = [];
    }

    /**
     * Returns Phone Numbers.
     *
     * @return CreateRegisterInformationPhoneRequest[]
     */
    public function getPhoneNumbers(): array
    {
        return $this->phoneNumbers;
    }

    /**
     * Sets Phone Numbers.
     *
     * @required
     * @maps phone_numbers
     *
     * @param CreateRegisterInformationPhoneRequest[] $phoneNumbers
     */
    public function setPhoneNumbers(array $phoneNumbers): void
    {
        $this->phoneNumbers = $phoneNumbers;
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
        $json['email']         = $this->email;
        $json['document']      = $this->document;
        $json['type']          = $this->type;
        if (!empty($this->siteUrl)) {
            $json['site_url']  = $this->siteUrl['value'];
        }
        $json['phone_numbers'] = $this->phoneNumbers;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
