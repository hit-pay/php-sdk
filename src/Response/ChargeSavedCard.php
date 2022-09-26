<?php

namespace HitPay\Response;

/**
 * Class ChargeSavedCard
 * @package HitPay\Response
 */
class ChargeSavedCard
{
    /**
     * @var string
     */
    public $payment_id;

    /**
     * @var string
     */
    public $recurring_billing_id;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $status;

    /**
     * ChargeSavedCard constructor.
     * @param \stdClass $result
     */
    public function __construct(\stdClass $result)
    {
        $this->setPaymentId($result->payment_id);
        $this->setRecurringBillingId($result->recurring_billing_id);
        $this->setAmount($result->amount);
        $this->setCurrency($result->currency);
        $this->setStatus($result->status);
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @return string
     */
    public function getRecurringBillingId()
    {
        return $this->recurring_billing_id;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $payment_id
     * @return ChargeSavedCard
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;

        return $this;
    }

    /**
     * @param string $recurring_billing_id
     * @return ChargeSavedCard
     */
    public function setRecurringBillingId($recurring_billing_id)
    {
        $this->recurring_billing_id = $recurring_billing_id;

        return $this;
    }

    /**
     * @param float $amount
     * @return ChargeSavedCard
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param string $currency
     * @return ChargeSavedCard
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param string $status
     * @return ChargeSavedCard
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
