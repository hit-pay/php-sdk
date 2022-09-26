<?php

namespace HitPay\Request;

/**
 * Class RecurringBilling - https://staging.hit-pay.com/docs.html?shell#recurring-billing
 *
 * @package HitPay\Request
 */
class RecurringBilling
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
     * Set the value “true” if you wish to save the card. More details in “Save Card” section 
     *
     * @var string
     */
    public $save_card;


    /**
     * Number of times to charge the card
     *
     * @var string
     */
    public $times_to_be_charge;

    /**
     * Hitpay to send email receipts to the customer. Default value is false
     *
     * @var string
     */
    public $send_email;


    /**
     * @param float $plan_id
     * @return RecurringBIlling
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
     * @param string $start_date
     * @return RecurringBIlling
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
     * @param sring $times_to_be_charge
     * @return RecurringBIlling
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
    public function getReference()
    {
        return $this->reference;
    }
}