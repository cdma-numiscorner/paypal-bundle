<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Info;

use Numiscorner\PaypalBundle\Model\Transaction\Address\Address;

class Shipping
{
    private string $name;

    private Address $address;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Shipping
     */
    public function setName(string $name): Shipping
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}
