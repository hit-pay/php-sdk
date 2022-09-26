<?php

namespace HitPay;

use HitPay\Request\CreatePayment;
use HitPay\Response\CreatePayment as CreatePaymentResponse;
use HitPay\Response\DeletePaymentRequest;
use HitPay\Response\PaymentStatus;
use HitPay\Response\Refund;
use HitPay\Request\CreateSubscriptionPlan;
use HitPay\Response\CreateSubscriptionPlan as CreateSubscriptionPlanResponse;
use HitPay\Request\RecurringBilling;
use HitPay\Response\RecurringBilling as RecurringBillingResponse;
use HitPay\Request\UpdateRecurringBilling;
use HitPay\Request\ChargeSavedCard;
use HitPay\Response\ChargeSavedCard as ChargeSavedCardResponse;

/**
 * Class Client
 * @package HitPay
 */
class Client extends Request
{
    const API_ENDPOINT = 'https://api.hit-pay.com/v1';

    const SANDBOX_API_ENDPOINT = 'https://api.sandbox.hit-pay.com/v1';

    const TYPE_CONTENT = 'application/x-www-form-urlencoded';

    protected $privateApiKey = '';

    /**
     * https://staging.hit-pay.com/docs.html?shell#create-payment-request
     *
     * @param CreatePayment $request
     * @return CreatePaymentResponse
     * @throws \Exception
     */
    public function createPayment(CreatePayment $request)
    {
        $result = $this->request('POST', '/payment-requests', (array)$request);

        return new CreatePaymentResponse($result);
    }

    /**
     * https://staging.hit-pay.com/docs.html?shell#get-payment-status
     *
     * @param $id
     * @return PaymentStatus
     * @throws \Exception
     */
    public function getPaymentStatus($id)
    {
        $result = $this->request('GET', '/payment-requests/' . $id);

        return new PaymentStatus($result);
    }

    /**
     * https://staging.hit-pay.com/docs.html?shell#delete-payment-request
     *
     * @param $id
     * @return PaymentStatus
     * @throws \Exception
     */
    public function deletePaymentRequest($id)
    {
        $result = $this->request('DELETE', '/payment-requests/' . $id);

        return new DeletePaymentRequest($result);
    }

    /**
     * @param $secret
     * @param array $args
     * @return string
     */
    public static function generateSignatureArray($secret, array $args)
    {
        $hmacSource = [];
        foreach ($args as $key => $val) {
            $hmacSource[$key] = "{$key}{$val}";
        }
        ksort($hmacSource);
        $sig = implode("", array_values($hmacSource));
        return hash_hmac('sha256', $sig, $secret);
    }
    
    /**
     * https://hit-pay.com/docs.html?php#refund
     *
     * @params $payment_id, $amount
     * @return Refund Response
     * @throws \Exception
     */
    public function refund($payment_id, $amount)
    {
        $result = $this->request('POST', '/refund', array('payment_id' => $payment_id, 'amount' => $amount));

        return new Refund($result);
    }
    
    /**
     * https://hit-pay.com/docs.html?shell#create-payment-request
     *
     * @param CreateSubscriptionPlan $request
     * @return CreateSubscriptionPlanResponse
     * @throws \Exception
     */
    public function createSubscriptionPlan(CreateSubscriptionPlan $request)
    {
        $result = $this->request('POST', '/subscription-plan', (array)$request);

        return new CreateSubscriptionPlanResponse($result);
    }
    
    /**
     * https://hit-pay.com/docs.html?shell#recurring-billing
     *
     * @param RecurringBilling $request
     * @return RecurringBillingResponse
     * @throws \Exception
     */
    public function recurringBilling(RecurringBilling $request)
    {
        $finalRequestParams = [];
        $requestParams = (array)$request;
        foreach ($requestParams as $key => $val) {
            if (!empty($val)) {
                $finalRequestParams[$key] = $val;
            }
        }
        $result = $this->request('POST', '/recurring-billing', $finalRequestParams);

        return new RecurringBillingResponse($result);
    }
    
    /**
     * https://staging.hit-pay.com/docs.html?shell#recurring-billing/{recurring-billing-id}
     *
     * @param $id
     * @return RecurringBillingResponse
     * @throws \Exception
     */
    public function getRecurringBillingStatus($id)
    {
        $result = $this->request('GET', '/recurring-billing/' . $id);

        return new RecurringBillingResponse($result);
    }
    
    /**
     * https://staging.hit-pay.com/docs.html?shell#recurring-billing/{recurring-billing-id}
     *
     * @param $id
     * @return RecurringBillingResponse
     * @throws \Exception
     */
    public function cancelSubscription($id)
    {
        $result = $this->request('DELETE', '/recurring-billing/' . $id);

        return new RecurringBillingResponse($result);
    }
    
    /**
     * https://staging.hit-pay.com/docs.html?shell#subscription-plan/{plan_id}
     *
     * @param $id
     * @return SubscriptionPlanResponse
     * @throws \Exception
     */
    public function getSubscriptionPlanDetails($id)
    {
        $result = $this->request('GET', '/subscription-plan/' . $id);

        return new CreateSubscriptionPlanResponse($result);
    }
    
    /**
     * https://staging.hit-pay.com/docs.html?shell#subscription-plan/{plan_id}
     *
     * @param $id
     * @return SubscriptionPlanResponse
     * @throws \Exception
     */
    public function updateSubscriptionPlan($id, CreateSubscriptionPlan $request)
    {
        $result = $this->request('PUT', '/subscription-plan/' . $id, (array)$request);

        return new CreateSubscriptionPlanResponse($result);
    }
    
    /**
     * https://staging.hit-pay.com/docs.html?shell#recurring-billing/{recurring-billing-id}
     *
     * @param $id
     * @return RecurringBillingResponse
     * @throws \Exception
     */
    public function updateRecurringBilling($id, UpdateRecurringBilling $request)
    {
        $result = $this->request('PUT', '/recurring-billing/' . $id, (array)$request);

        return new RecurringBillingResponse($result);
    }
    
        /**
     * https://staging.hit-pay.com/docs.html?shell#recurring-billing/{recurring-billing-id}
     *
     * @param $id
     * @return ChargeSavedCardResponse
     * @throws \Exception
     */
    public function chargeSavedCard($id, ChargeSavedCard $request)
    {
        $result = $this->request('POST', '/recurring-billing/' . $id, (array)$request);

        return new ChargeSavedCardResponse($result);
    }
}
