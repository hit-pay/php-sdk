<?php

namespace HitPay\Request;

/**
 * Class ChargeSavedCard - https://staging.hit-pay.com/docs.html?shell#payment-requests
 *
 * @package HitPay\Request
 */
class ChargeSavedCard
{
    /**
     * Amount related to the payment
     *
     * @var float
     */
    public $amount;

    /**
     * Currency related to the payment
     *
     * @var string
     */
    public $currency;

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
     * @param float $amount
     * @return CreateSubscriptionPlan
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param string $currency
     * @return CreateSubscriptionPlan
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
}