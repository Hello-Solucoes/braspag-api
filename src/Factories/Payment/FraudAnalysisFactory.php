<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:29
 */

namespace Braspag\Factories\Payment;

use Braspag\Factories\Payment\FraudAnalysis\BrowserFactory;
use Braspag\Factories\Payment\FraudAnalysis\CartFactory;
use Braspag\Factories\Payment\FraudAnalysis\MerchantDefinedFieldFactory;
use Braspag\Factories\Payment\FraudAnalysis\ShippingFactory;
use Braspag\Factories\Payment\FraudAnalysis\TravelFactory;

class FraudAnalysisFactory
{
    public function make($fraudAnalysis)
    {
        $response = [
            'Sequence' => $fraudAnalysis->getSequence(),
            'SequenceCriteria' => $fraudAnalysis->getSequenceCriteria(),
            'Provider' => $fraudAnalysis->getProvider(),
            'CaptureOnLowRisk' => $fraudAnalysis->getCaptureOnLowRisk(),
            'VoidOnHighRisk' => $fraudAnalysis->getVoidOnHighRisk(),
            'TotalOrderAmount' => $fraudAnalysis->getTotalOrderAmount(),
            'FingerPrintId' => $fraudAnalysis->getFingerPrintId(),
        ];

        if (!empty($fraudAnalysis->getBrowser())) {
            $response['Browser'] = $this->makeBrowser($fraudAnalysis->getBrowser());
        }

        if (!empty($fraudAnalysis->getCart())) {
            $response['Cart'] = $this->makeCart($fraudAnalysis->getCart());
        }

        if (!empty($fraudAnalysis->getMerchantDefinedFields())) {
            $response['MerchantDefinedFields'] = $this->makeMerchantDefinedFields($fraudAnalysis->getMerchantDefinedFields());
        }

        if (!empty($fraudAnalysis->getShipping())) {
            $response['Shipping'] = $this->makeShipping($fraudAnalysis->getShipping());
        }

        if (!empty($fraudAnalysis->getTravel())) {
            $response['Travel'] = $this->makeTravel($fraudAnalysis->getTravel());
        }

        return $response;
    }

    /**
     * @param $browser
     * @return array
     */
    private function makeBrowser($browser)
    {
        return app(BrowserFactory::class)->make($browser);
    }

    /**
     * @param $cartObj
     * @return array
     */
    private function makeCart($cartObj)
    {
        return app(CartFactory::class)->make($cartObj->getItems());
    }

    /**
     * @param $merchantDefinedFields
     * @return array
     */
    private function makeMerchantDefinedFields($merchantDefinedFields)
    {
        $response = [];

        if (!empty($merchantDefinedFields->getMerchanDefinesFieldsEntity())) {
            foreach ($merchantDefinedFields->getMerchanDefinesFieldsEntity() as $field) {
                $response[] = app(MerchantDefinedFieldFactory::class)->make($field);
            }
        }

        return $response;
    }

    /**
     * @param $shipping
     * @return array
     */
    private function makeShipping($shipping)
    {
        return app(ShippingFactory::class)->make($shipping);
    }

    /**
     * @param $travel
     * @return array
     */
    private function makeTravel($travel)
    {
        return app(TravelFactory::class)->make($travel);
    }
}