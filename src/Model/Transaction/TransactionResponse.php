<?php

namespace Numiscorner\PaypalBundle\Model\Transaction;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\SerializedName;

class TransactionResponse
{
    /**
     * @var string
     * @SerializedName("account_number")
     */
    private string $accountNumber;

    /**
     * @var \DateTime
     * @SerializedName("start_date")
     */
    private \DateTime $startDate;

    /**
     * @var \DateTime
     * @SerializedName("end_date")
     */
    private \DateTime $endDate;

    /**
     * @var \DateTime
     * @SerializedName("last_refreshed_datetime")
     */
    private \DateTime $lastRefreshedDatetime;

    /**
     * @var int
     * @SerializedName("page")
     */
    private int $page;

    /**
     * @var int
     * @SerializedName("total_items")
     */
    private int $totalItems;

    /**
     * @var int
     * @SerializedName("total_pages")
     */
    private int $totalPages;

    /**
     * @SerializedName("links")
     */
    private Collection $links;

    /**
     * @SerializedName("transaction_details")
     */
    private Collection $transactionDetails;

    public function __construct()
    {
        $this->transactionDetails = new ArrayCollection();
        $this->links = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return TransactionResponse
     */
    public function setAccountNumber(string $accountNumber): TransactionResponse
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return TransactionResponse
     */
    public function setStartDate(\DateTime $startDate): TransactionResponse
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return TransactionResponse
     */
    public function setEndDate(\DateTime $endDate): TransactionResponse
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastRefreshedDatetime(): \DateTime
    {
        return $this->lastRefreshedDatetime;
    }

    /**
     * @param \DateTime $lastRefreshedDatetime
     * @return TransactionResponse
     */
    public function setLastRefreshedDatetime(\DateTime $lastRefreshedDatetime): TransactionResponse
    {
        $this->lastRefreshedDatetime = $lastRefreshedDatetime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return TransactionResponse
     */
    public function setPage(int $page): TransactionResponse
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     * @return TransactionResponse
     */
    public function setTotalItems(int $totalItems): TransactionResponse
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return TransactionResponse
     */
    public function setTotalPages(int $totalPages): TransactionResponse
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    public function getLinks(): Collection
    {
        return $this->links;
    }

    public function addLink(Link $link):TransactionResponse
    {
        if (!$this->links->contains($link))
        {
            $this->links->add($link);
        }

        return $this;
    }

    public function removeLink($link):TransactionResponse
    {
        if ($this->links->contains($link))
        {
            $this->links->removeElement($link);
        }

        return $this;
    }

    public function getTransactionDetails(): Collection
    {
        return $this->transactionDetails;
    }

    public function addTransactionDetail(Transaction $transaction):TransactionResponse
    {
        if (!$this->transactionDetails->contains($transaction))
        {
            $this->transactionDetails->add($transaction);
        }

        return $this;
    }

    public function removeTransactionDetail($transaction):TransactionResponse
    {
        if ($this->transactionDetails->contains($transaction))
        {
            $this->transactionDetails->removeElement($transaction);
        }

        return $this;
    }
}
