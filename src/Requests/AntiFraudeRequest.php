<?php


namespace Braspag\Requests;

use Braspag\Entities\CartEntity;
use Braspag\Entities\CustomerEntity;
use Braspag\Entities\FraudAnalysisEntity;
use Braspag\Entities\MerchantOrderEntity;
use Braspag\Entities\PassengersEntity;
use Braspag\Entities\PaymentEntity;
use Braspag\Entities\ShippingEntity;
use Braspag\Entities\TravelEntity;

class AntiFraudeRequest
{

    /**
     * @var $merchantOrderIdEntity
     */
    private $merchantOrderIdEntity;


    /**
     * @var $customerEntity
     */
    private $customerEntity;

    /**
     * @var $paymentEntity
     */
    private $paymentEntity;

    /**
     * @var $fraudAnalysisEntity
     */

    private $fraudAnalysisEntity;

    /**
     * @var $cartEntity
     */
    private $cartEntity;

    /**
     * @var $merchantDefinedFieldsEntity
     */
    private $merchantDefinedFieldsEntity;

    /**
     * @var $shippingEntity
     */
    private $shippingEntity;

    /**
     * @var $travelEntity
     */
    private $travelEntity;

    /**
     * @var $passengersEntity
     */
    private $passengersEntity;

    /**
     * @return mixed
     */
    public function getMerchantOrderIdEntity()
    {
        return $this->merchantOrderIdEntity;
    }

    /**
     * @param mixed $merchantOrderIdEntity
     * @return AntiFraudeRequest
     */
    public function setMerchantOrderIdEntity(MerchantOrderEntity $merchantOrderIdEntity)
    {
        $this->merchantOrderIdEntity = $merchantOrderIdEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerEntity()
    {
        return $this->customerEntity;
    }

    /**
     * @param mixed $customerEntity
     * @return AntiFraudeRequest
     */
    public function setCustomerEntity(CustomerEntity $customerEntity)
    {
        $this->customerEntity = $customerEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentEntity()
    {
        return $this->paymentEntity;
    }

    /**
     * @param mixed $paymentEntity
     * @return AntiFraudeRequest
     */
    public function setPaymentEntity(PaymentEntity $paymentEntity)
    {
        $this->paymentEntity = $paymentEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFraudAnalysisEntity()
    {
        return $this->fraudAnalysisEntity;
    }

    /**
     * @param mixed $fraudAnalysisEntity
     * @return AntiFraudeRequest
     */
    public function setFraudAnalysisEntity(FraudAnalysisEntity $fraudAnalysisEntity)
    {
        $this->fraudAnalysisEntity = $fraudAnalysisEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCartEntity()
    {
        return $this->cartEntity;
    }

    /**
     * @param mixed $cartEntity
     * @return AntiFraudeRequest
     */
    public function setCartEntity(CartEntity $cartEntity)
    {
        $this->cartEntity = $cartEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantDefinedFieldsEntity()
    {
        return $this->merchantDefinedFieldsEntity;
    }

    /**
     * @param mixed $merchantDefinedFieldsEntity
     * @return AntiFraudeRequest
     */
    public function setMerchantDefinedFieldsEntity(MerchantOrderEntity $merchantDefinedFieldsEntity)
    {
        $this->merchantDefinedFieldsEntity = $merchantDefinedFieldsEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingEntity()
    {
        return $this->shippingEntity;
    }

    /**
     * @param mixed $shippingEntity
     * @return AntiFraudeRequest
     */
    public function setShippingEntity(ShippingEntity $shippingEntity)
    {
        $this->shippingEntity = $shippingEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTravelEntity()
    {
        return $this->travelEntity;
    }

    /**
     * @param mixed $travelEntity
     * @return AntiFraudeRequest
     */
    public function setTravelEntity(TravelEntity $travelEntity)
    {
        $this->travelEntity = $travelEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassengersEntity()
    {
        return $this->passengersEntity;
    }

    /**
     * @param mixed $passengersEntity
     * @return AntiFraudeRequest
     */
    public function setPassengersEntity(PassengersEntity $passengersEntity)
    {
        $this->passengersEntity = $passengersEntity;
        return $this;
    }





}