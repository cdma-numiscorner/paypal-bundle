<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Item;

use Numiscorner\PaypalBundle\Model\Transaction\Amount\Amount;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Item
{
    /**
     * @var string
     * @SerializedName("item_code")
     */
    private string $code;

    /**
     * @var string
     * @SerializedName("item_name")
     */
    private string $name;

    /**
     * @var string
     * @SerializedName("item_quantity")
     */
    private string $quantity;

    /**
     * @var Amount
     * @SerializedName("item_unit_price")
     */
    private Amount $unitPrice;

    /**
     * @var Amount
     * @SerializedName("item_amount")
     */
    private Amount $amount;

    /**
     * @var Amount
     * @SerializedName("total_item_amount")
     */
    private Amount $itemAmount;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Item
     */
    public function setCode(string $code): Item
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName(string $name): Item
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     * @return Item
     */
    public function setQuantity(string $quantity): Item
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getUnitPrice(): Amount
    {
        return $this->unitPrice;
    }

    /**
     * @param Amount $unitPrice
     * @return Item
     */
    public function setUnitPrice(Amount $unitPrice): Item
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return Item
     */
    public function setAmount(Amount $amount): Item
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getItemAmount(): Amount
    {
        return $this->itemAmount;
    }

    /**
     * @param Amount $itemAmount
     * @return Item
     */
    public function setItemAmount(Amount $itemAmount): Item
    {
        $this->itemAmount = $itemAmount;
        return $this;
    }
}
