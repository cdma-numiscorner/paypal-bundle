<?php

namespace Numiscorner\PaypalBundle\Model\Transaction;

use Numiscorner\PaypalBundle\Model\Transaction\Info as Info;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Transaction
{
    /**
     * @var Info\Transaction
     * @SerializedName("transaction_info")
     */
    private Info\Transaction $transaction;

    /**
     * @var Info\Payer
     * @SerializedName("payer_info")
     */
    private Info\Payer $payer;

    /**
     * @var Info\Shipping
     * @SerializedName("shipping_info")
     */
    private Info\Shipping $shipping;

    /**
     * @var Info\Cart
     * @SerializedName("cart_info")
     */
    private Info\Cart $cart;

    /**
     * @var Info\Cart
     * @SerializedName("store_info")
     * @Ignore
     */
    private Info\Cart $storeInfo;

    /**31536000
     * @var Info\Cart
     * @SerializedName("auction_info")
     * @Ignore
     */
    private Info\Cart $auctionInfo;

    /**
     * @var Info\Cart
     * @SerializedName("incentive_info")
     * @Ignore
     */
    private Info\Cart $incentiveInfo;

    private Collection $conversions;

    public function __construct()
    {
        $this->conversions = new ArrayCollection();
    }

    /**
     * @return Info\Transaction
     */
    public function getTransaction(): Info\Transaction
    {
        return $this->transaction;
    }

    /**
     * @param Info\Transaction $transaction
     * @return Transaction
     */
    public function setTransaction(Info\Transaction $transaction): Transaction
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return Info\Payer
     */
    public function getPayer(): Info\Payer
    {
        return $this->payer;
    }

    /**
     * @param Info\Payer $payer
     * @return Transaction
     */
    public function setPayer(Info\Payer $payer): Transaction
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return Info\Shipping
     */
    public function getShipping(): Info\Shipping
    {
        return $this->shipping;
    }

    /**
     * @param Info\Shipping $shipping
     * @return Transaction
     */
    public function setShipping(Info\Shipping $shipping): Transaction
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return Info\Cart
     */
    public function getCart(): Info\Cart
    {
        return $this->cart;
    }

    /**
     * @param Info\Cart $cart
     * @return Transaction
     */
    public function setCart(Info\Cart $cart): Transaction
    {
        $this->cart = $cart;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getConversions(): Collection
    {
        return $this->conversions;
    }

    public function addConversion(Transaction $transaction)
    {
        if (!$this->conversions->contains($transaction))
        {
            $this->conversions->add($transaction);
        }

        return $this;
    }

    public function removeConversion(Transaction $transaction)
    {
        if ($this->conversions->contains($transaction))
        {
            $this->conversions->removeElement($transaction);
        }

        return $this;
    }

    /**
     * @return Info\Cart
     */
    public function getStoreInfo(): Info\Cart
    {
        return $this->storeInfo;
    }

    /**
     * @param Info\Cart $storeInfo
     * @return Transaction
     */
    public function setStoreInfo(Info\Cart $storeInfo): Transaction
    {
        $this->storeInfo = $storeInfo;
        return $this;
    }

    /**
     * @return Info\Cart
     */
    public function getAuctionInfo(): Info\Cart
    {
        return $this->auctionInfo;
    }

    /**
     * @param Info\Cart $auctionInfo
     * @return Transaction
     */
    public function setAuctionInfo(Info\Cart $auctionInfo): Transaction
    {
        $this->auctionInfo = $auctionInfo;
        return $this;
    }

    /**
     * @return Info\Cart
     */
    public function getIncentiveInfo(): Info\Cart
    {
        return $this->incentiveInfo;
    }

    /**
     * @param Info\Cart $incentiveInfo
     * @return Transaction
     */
    public function setIncentiveInfo(Info\Cart $incentiveInfo): Transaction
    {
        $this->incentiveInfo = $incentiveInfo;
        return $this;
    }
}
