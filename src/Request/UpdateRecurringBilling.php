<?php

namespace HitPay\Request;

/**
 * Class RecurringBilling - https://staging.hit-pay.com/docs.html?shell#recurring-billing
 *
 * @package HitPay\Request
 */
class UpdateRecurringBilling
{
    /**
     * Plan Id
     *
     * @var string
     */
    public $plan_id;
    
    /**
     * Customer email
     *
     * @var string
     */
    public $customer_email;
    
    /**
     * Customer name
     *
     * @var string
     */
    public $customer_name;
    
    /**
     * Billing start date (YYYY-MM-DD) in SGT
     *
     * @var null
     */
    public $start_date;
    
    /**
     * URL where hitpay redirects the user after the users enters the card details 
     * and the subscription is active. Query arguments reference
     * (subscription id) and  status are sent along
     *
     * @var string
     */
    public $redirect_url;
    
    /**
     * Arbitrary reference number that you can map to your internal reference number.
     * This value cannot be edited by the customer
     *
     * @var string
     */
    public $reference;
    
    /**
     * Amount related to the payment
     *
     * @var float
     */
    public $amount;
    
    /**
     * Optional URL value to which hitpay will send a POST request 
     * when there is a new charge or if there is an error charging the card
     *
     * @var string
     */
    public $webhook;

    /**
     * Hitpay to send email receipts to the customer. Default value is false
     *
     * @var string
     */
    public $send_email;
    
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
     * @param float $plan_id
     * @return UpdateRecurringBilling
     */
    public function setPlanId($plan_id)
    {
        $this->plan_id = $plan_id;

        return $this;
    }


    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }
    
    /**
     * @param float $customer_email
     * @return UpdateRecurringBilling
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
     * @param float $amount
     * @return UpdateRecurringBilling
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
     * @param string $start_date
     * @return UpdateRecurringBilling
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param string $customer_name
     * @return UpdateRecurringBilling
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
     * @param string $redirect_url
     * @return UpdateRecurringBilling
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
     * @param string $webhook
     * @return UpdateRecurringBilling
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
     * @return UpdateRecurringBilling
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
     * @param sring $times_to_be_charge
     * @return UpdateRecurringBilling
     */
    public function setTimesToBeCharge($times_to_be_charge)
    {
        $this->times_to_be_charge = $times_to_be_charge;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getTimesToBeCharge()
    {
        return $this->times_to_be_charge;
    }

    /**
     * @param sring $send_email
     * @return UpdateRecurringBilling
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

    /**
     * @param string $reference
     * @return UpdateRecurringBilling
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
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
     * @param sring $cycle
     * @return UpdateRecurringBilling
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }
    
    
    /**
     * @param sring $cycle
     * @return UpdateRecurringBilling
     */
    public function setCycleRepeat($cycle_repeat)
    {
        $this->cycle_repeat = $cycle_repeat;
        
        return $this;
    }
    
    /**
     * @param sring $cycle
     * @return UpdateRecurringBilling
     */
    public function setCycleFrequency($cycle_frequency)
    {
        $this->cycle_frequency = $cycle_frequency;
        
        return $this;
    }
}