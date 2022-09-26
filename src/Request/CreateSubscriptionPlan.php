<?php

namespace HitPay\Request;

/**
 * Class CreateSubscriptionPlan - https://staging.hit-pay.com/docs.html?shell#payment-requests
 *
 * @package HitPay\Request
 */
class CreateSubscriptionPlan
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
     * Plan name
     *
     * @var string
     */
    public $name;

    /**
     * Billing frequency (weekly / monthly / yearly /custom)
     *
     * @var string
     */
    public $cycle;
    
    /**
     * This field is only applicable when cycle = custom] It's the number of times the cycle will repeat.
     *
     * @var string
     */
    public $cycle_repeat;
    
    /**
     * This field is only applicable when cycle = custom] It's the frequency of the cycle [day / week / month / year
     *
     * @var string
     */
    public $cycle_frequency;

    /**
     * Arbitrary reference number that you can map to your internal reference number.
     * This value cannot be edited by the customer
     *
     * @var string
     */
    public $reference;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCycle()
    {
        return $this->cycle;
    }
    
    /**
     * @return string
     */
    public function getCycleRepeat()
    {
        return $this->cycle_repeat;
    }
    
    /**
     * @return string
     */
    public function getCycleFrequency()
    {
        return $this->cycle_frequency;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
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

    /**
     * @param string $name
     * @return CreateSubscriptionPlan
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param sring $cycle
     * @return CreateSubscriptionPlan
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }
    
    /**
     * @param sring $cycle
     * @return CreateSubscriptionPlan
     */
    public function setCycleRepeat($cycle_repeat)
    {
        $this->cycle_repeat = $cycle_repeat;
        
        return $this;
    }
    
    /**
     * @param sring $cycle
     * @return CreateSubscriptionPlan
     */
    public function setCycleFrequency($cycle_frequency)
    {
        $this->cycle_frequency = $cycle_frequency;
        
        return $this;
    }

    /**
     * @param string $reference
     * @return CreateSubscriptionPlan
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }
}