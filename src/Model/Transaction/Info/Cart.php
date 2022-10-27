<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Info;

use Numiscorner\PaypalBundle\Model\Transaction\Item\Item;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Cart
{
    /**
     * @SerializedName("item_details")
     */
    private Collection $itemDetails;

    public function __construct()
    {
        $this->itemDetails = new ArrayCollection();
    }

    public function getItemDetails(): Collection
    {
        return $this->itemDetails;
    }

    public function addItemDetail(Item $item): Cart
    {
        if (!$this->itemDetails->contains($item))
        {
            $this->itemDetails->add($item);
        }

        return $this;
    }

    public function removeItemDetail(Item $item): Cart
    {
        if ($this->itemDetails->contains($item))
        {
            $this->itemDetails->remove($item);
        }

        return $this;
    }
}
