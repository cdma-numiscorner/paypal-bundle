<?php

namespace Numiscorner\PaypalBundle\Model\Transaction\Info;

use Numiscorner\PaypalBundle\Model\Transaction\Amount\Amount;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Transaction
{
    /**
     * @var string
     * @SerializedName("paypal_account_id")
     */
    private string $paypalAccountId;

    /**
     * @var string
     * @SerializedName("paypal_reference_id")
     */
    private string $paypalReferenceId;

    /**
     * @var string
     * @SerializedName("paypal_reference_id_type")
     */
    private string $paypalReferenceIdType;

    /**
     * @var string
     * @SerializedName("transaction_id")
     */
    private string $transactionId;

    /**
     * @var string
     * @SerializedName("transaction_event_code")
     */
    private string $transactionEventCode;

    /**
     * @var \DateTime
     * @SerializedName("transaction_initiation_date")
     */
    private \DateTime $transactionInitiationDate;

    /**
     * @var \DateTime
     * @SerializedName("transaction_updated_date")
     */
    private \DateTime $transactionUpdatedDate;

    /**
     * @var Amount
     * @SerializedName("transaction_amount")
     */
    private Amount $transactionAmount;

    /**
     * @var Amount|null
     * @SerializedName("fee_amount")
     */
    private ?Amount $feeAmount = null;

    /**
     * @var string
     * @SerializedName("transaction_status")
     */
    private string $transactionStatus;

    /**
     * @var Amount
     * @SerializedName("ending_balance")
     */
    private Amount $endingBalance;

    /**
     * @var Amount
     * @SerializedName("available_balance")
     */
    private Amount $availableBalance;

    /**
     * @var string
     * @SerializedName("protection_eligibility")
     */
    private string $protectionEligibility;

    /**
     * @return string
     */
    public function getPaypalAccountId(): string
    {
        return $this->paypalAccountId;
    }

    /**
     * @param string $paypalAccountId
     * @return Transaction
     */
    public function setPaypalAccountId(string $paypalAccountId): Transaction
    {
        $this->paypalAccountId = $paypalAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Transaction
     */
    public function setTransactionId(string $transactionId): Transaction
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionEventCode(): string
    {
        return $this->transactionEventCode;
    }

    /**
     * @param string $transactionEventCode
     * @return Transaction
     */
    public function setTransactionEventCode(string $transactionEventCode): Transaction
    {
        $this->transactionEventCode = $transactionEventCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionInitiationDate(): \DateTime
    {
        return $this->transactionInitiationDate;
    }

    /**
     * @param \DateTime $transactionInitiationDate
     * @return Transaction
     */
    public function setTransactionInitiationDate(\DateTime $transactionInitiationDate): Transaction
    {
        $this->transactionInitiationDate = $transactionInitiationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionUpdatedDate(): \DateTime
    {
        return $this->transactionUpdatedDate;
    }

    /**
     * @param \DateTime $transactionUpdatedDate
     * @return Transaction
     */
    public function setTransactionUpdatedDate(\DateTime $transactionUpdatedDate): Transaction
    {
        $this->transactionUpdatedDate = $transactionUpdatedDate;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getTransactionAmount(): Amount
    {
        return $this->transactionAmount;
    }

    /**
     * @param Amount $transactionAmount
     * @return Transaction
     */
    public function setTransactionAmount(Amount $transactionAmount): Transaction
    {
        $this->transactionAmount = $transactionAmount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getFeeAmount(): ?Amount
    {
        return $this->feeAmount;
    }

    /**
     * @param Amount|null $feeAmount
     * @return Transaction
     */
    public function setFeeAmount(?Amount $feeAmount): Transaction
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatus(): string
    {
        return $this->transactionStatus;
    }

    /**
     * @param string $transactionStatus
     * @return Transaction
     */
    public function setTransactionStatus(string $transactionStatus): Transaction
    {
        $this->transactionStatus = $transactionStatus;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getEndingBalance(): Amount
    {
        return $this->endingBalance;
    }

    /**
     * @param Amount $endingBalance
     * @return Transaction
     */
    public function setEndingBalance(Amount $endingBalance): Transaction
    {
        $this->endingBalance = $endingBalance;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAvailableBalance(): Amount
    {
        return $this->availableBalance;
    }

    /**
     * @param Amount $availableBalance
     * @return Transaction
     */
    public function setAvailableBalance(Amount $availableBalance): Transaction
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtectionEligibility(): string
    {
        return $this->protectionEligibility;
    }

    /**
     * @param string $protectionEligibility
     * @return Transaction
     */
    public function setProtectionEligibility(string $protectionEligibility): Transaction
    {
        $this->protectionEligibility = $protectionEligibility;
        return $this;
    }

    public function getPaypalReferenceId(): ?string
    {
        return $this->paypalReferenceId;
    }

    public function setPaypalReferenceId(string $paypalReferenceId): self
    {
        $this->paypalReferenceId = $paypalReferenceId;
        return $this;
    }

    public function getPaypalReferenceIdType(): ?string
    {
        return $this->paypalReferenceIdType;
    }

    public function setPaypalReferenceIdType(string $paypalReferenceIdType): self
    {
        $this->paypalReferenceIdType = $paypalReferenceIdType;
        return $this;
    }
}
