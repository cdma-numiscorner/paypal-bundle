<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Amount;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Amount
{
    /**
     * @var string
     * @SerializedName("currency_code")
     */
    private string $currencyCode;

    /**
     * @var string
     */
    private string $value = "0.00";

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): Amount
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }


    public function getValue() : string
    {
        return $this->value;
    }

    public function setValue(string $value): Amount
    {
        $this->value = $value;
        return $this;
    }
}
