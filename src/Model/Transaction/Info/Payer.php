<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Info;

use Numiscorner\PaypalBundle\Model\Transaction\Payer\Name;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Payer
{
    /**
     * @var string
     * @SerializedName("account_id")
     */
    private string $accountId;

    /**
     * @var string
     * @SerializedName("email_address")
     */
    private string $emailAddress;

    /**
     * @var string
     * @SerializedName("address_status")
     */
    private string $addressStatus;

    /**
     * @var string
     * @SerializedName("payer_status")
     */
    private string $payerStatus;

    /**
     * @var Name|null
     * @SerializedName("payer_name")
     */
    private ?Name $payerName = null;

    /**
     * @var string
     * @SerializedName("country_code")
     */
    private string $countryCode;

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return Payer
     */
    public function setAccountId(string $accountId): Payer
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return Payer
     */
    public function setEmailAddress(string $emailAddress): Payer
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressStatus(): string
    {
        return $this->addressStatus;
    }

    /**
     * @param string $addressStatus
     * @return Payer
     */
    public function setAddressStatus(string $addressStatus): Payer
    {
        $this->addressStatus = $addressStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayerStatus(): string
    {
        return $this->payerStatus;
    }

    /**
     * @param string $payerStatus
     * @return Payer
     */
    public function setPayerStatus(string $payerStatus): Payer
    {
        $this->payerStatus = $payerStatus;
        return $this;
    }

    /**
     * @return Name
     */
    public function getPayerName(): ?Name
    {
        return $this->payerName;
    }

    /**
     * @param Name|null $payerName
     * @return Payer
     */
    public function setPayerName(?Name $payerName): Payer
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Payer
     */
    public function setCountryCode(string $countryCode): Payer
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
