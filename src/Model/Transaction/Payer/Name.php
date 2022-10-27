<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Payer;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Name
{
    /**
     * @var string|null
     * @SerializedName("given_name")
     */
    private ?string $givenName = null;

    /**
     * @var string|null
     * @SerializedName("surname")
     */
    private ?string $surname = null;

    /**
     * @var string|null
     * @SerializedName("alternate_full_name")
     */
    private ?string $alternateFullName = null;

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): Name
    {
        $this->givenName = $givenName;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): Name
    {
        $this->surname = $surname;
        return $this;
    }

    public function getAlternateFullName(): ?string
    {
        return $this->alternateFullName;
    }

    public function setAlternateFullName(?string $alternateFullName): Name
    {
        $this->alternateFullName = $alternateFullName;
        return $this;
    }
}
