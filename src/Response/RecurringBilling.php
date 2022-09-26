<?php

namespace HitPay\Response;

/**
 * Class RecurringBilling
 * @package HitPay\Response
 */
class RecurringBilling
{
    /**
     * @var string
     */
    public $id;
    
    /**
     * @var string
     */
    public $business_recurring_plans_id;

    /**
     * @var string
     */
    public $customer_name;
    
    /**
     * @var string
     */
    public $customer_email;
    
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
    public $reference;

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
    public $created_at;

    /**
     * @var string
     */
    public $updated_at;
    
    /**
     * @var string
     */
    public $expires_at;
    
    /**
     * @var string
     */
    public $status;
    
    /**
     * @var array
     */
    public $payment_methods = array();
    
    /**
     * @var string
     */
    public $redirect_url;

    /**
     * @var string
     */
    public $url;
    
    /**
     * @var string
     */
    public $times_to_be_charged;
    
    /**
     * @var string
     */
    public $times_charged;
    
    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $save_card;
    
    /**
     * @var string
     */
    public $send_email;

    /**
     * RecurringBilling constructor.
     * @param \stdClass $result
     */
    public function __construct(\stdClass $result)
    {
        $this->setId($result->id);
        $this->setBusinessRecurringPlansId($result->business_recurring_plans_id);
        $this->setCustomerName($result->customer_name);
        $this->setCustomerEmail($result->customer_email);
        $this->setName($result->name);
        $this->setDescription($result->description);
        $this->setCycle($result->cycle);
        $this->setAmount($result->amount);
        $this->setCurrency($result->currency);
        $this->setStatus($result->status);
        $this->setTimesToBeCharged($result->times_to_be_charged);
        $this->setTimesCharged($result->times_charged);
        $this->setCreatedAt($result->created_at);
        $this->setUpdatedAt($result->updated_at);
        $this->setExpiresAt($result->expires_at);
        $this->setRedirectUrl($result->redirect_url);
        $this->setUrl($result->url);
        $this->setPaymentMethods($result->payment_methods);
        $this->setReference($result->reference);
        $this->setCycleRepeat($result->cycle_repeat);
        $this->setCycleFrequency($result->cycle_frequency);
        $this->setWebhook($result->webhook);
        $this->setSaveCard($result->save_card);
        $this->setSendEmail($result->send_email);
    }

    /**
     * @param string $id
     * @return RecurringBIlling
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param string $business_recurring_plans_id
     * @return RecurringBIlling
     */
    public function setBusinessRecurringPlansId($business_recurring_plans_id)
    {
        $this->business_recurring_plans_id = $business_recurring_plans_id;

        return $this;
    }
    
        /**
     * @return string
     */
    public function getBusinessRecurringPlansId()
    {
        return $this->business_recurring_plans_id;
    }
    
    /**
     * @param string $customer_name
     * @return RecurringBIlling
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }
    
    /**
     * @param float $customer_email
     * @return RecurringBIlling
     */
    public function setCustomerEmail($customer_email)
    {
        $this->customer_email = $customer_email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customer_email;
    }
    
    /**
     * @param string $name
     * @return RecurringBIlling
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
     /**
     * @param string $description
     * @return RecurringBIlling
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }   

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param string $cycle
     * @return RecurringBIlling
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;
    }

    /**
     * @return int
     */
    public function getCycle()
    {
        return $this->cycle;
    }
    
    /**
     * @param string $currency
     * @return RecurringBIlling
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
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
     * @return RecurringBIlling
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * @param string $times_to_be_charged
     * @return RecurringBIlling
     */
    public function setTimesToBeCharged($times_to_be_charged)
    {
        $this->times_to_be_charged = $times_to_be_charged;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimesToBeCharged()
    {
        return $this->times_to_be_charged;
    }
    
    /**
     * @param string $times_charged
     * @return RecurringBIlling
     */
    public function setTimesCharged($times_charged)
    {
        $this->times_charged = $times_charged;

        return $this;
    }
    
     /**
     * @return string
     */
    public function getTimesCharged()
    {
        return $this->times_charged;
    }
    
    /**
     * @param string $status
     * @return RecurringBIlling
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * @param string $redirect_url
     * @return RecurringBIlling
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->redirect_url = $redirect_url;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }
    
    /**
     * @param array $payment_methods
     * @return RecurringBIlling
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->payment_methods = $payment_methods;

        return $this;
    }
    
    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->payment_methods;
    }
    
    /**
     * @param string $created_at
     * @return RecurringBIlling
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    
    /**
     * @param string $updated_at
     * @return RecurringBIlling
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $expires_at
     * @return RecurringBIlling
     */
    public function setExpiresAt($expires_at)
    {
        $this->expires_at = $expires_at;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }
    
    /**
     * @param string $url
     * @return RecurringBIlling
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
    
    /**
     * @param string $reference
     * @return RecurringBIlling
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
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
     * @param sring $cycle
     * @return RecurringBIlling
     */
    public function setCycleRepeat($cycle_repeat)
    {
        $this->cycle_repeat = $cycle_repeat;
        
        return $this;
    }
    
    /**
     * @param sring $cycle
     * @return RecurringBIlling
     */
    public function setCycleFrequency($cycle_frequency)
    {
        $this->cycle_frequency = $cycle_frequency;
        
        return $this;
    }
    
    /**
     * @param string $webhook
     * @return RecurringBIlling
     */
    public function setWebhook($webhook)
    {
        $this->webhook = $webhook;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getWebhook()
    {
        return $this->webhook;
    }
    
    /**
     * @param sring $save_card
     * @return RecurringBIlling
     */
    public function setSaveCard($save_card)
    {
        $this->save_card = $save_card;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getSaveCard()
    {
        return $this->save_card;
    }
    
    /**
     * @param sring $send_email
     * @return RecurringBIlling
     */
    public function setSendEmail($send_email)
    {
        $this->send_email = $send_email;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getSendEmail()
    {
        return $this->send_email;
    }
}
