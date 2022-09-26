<?php

namespace HitPay\Response;

/**
 * Class CreateSubscriptionPlan
 * @package HitPay\Response
 */
class CreateSubscriptionPlan
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $cycle;
    
    /**
     * @var string
     */
    public $cycle_repeat;
    
    /**
     * @var string
     */
    public $cycle_frequency;

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
    public $reference;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $updated_at;

    /**
     * CreateSubscriptionPlan constructor.
     * @param \stdClass $result
     */
    public function __construct(\stdClass $result)
    {
        $this->setId($result->id);
        $this->setName($result->name);
        $this->setDescription($result->description);
        $this->setCycle($result->cycle);
        $this->setAmount($result->amount);
        $this->setCurrency($result->currency);
        $this->setReference($result->reference);
        $this->setCreatedAt($result->created_at);
        $this->setUpdatedAt($result->updated_at);
        $this->setCycleRepeat($result->cycle_repeat);
        $this->setCycleFrequency($result->cycle_frequency);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $id
     * @return CreateSubscriptionPlan
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @param string $description
     * @return CreateSubscriptionPlan
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $cycle
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
     * @param string $reference
     * @return CreateSubscriptionPlan
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @param string $created_at
     * @return CreateSubscriptionPlan
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param string $updated_at
     * @return CreateSubscriptionPlan
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
