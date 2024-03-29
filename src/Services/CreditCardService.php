<?php


namespace BraspagApi\Services;

use BraspagApi\Braspag;
use BraspagApi\Config;
use BraspagApi\Factories\CreditCardCaptureFactory;
use BraspagApi\Factories\CreditCardCancellationFactory;
use BraspagApi\Factories\CreditCardConsultFactory;
use BraspagApi\Factories\CreditCardTransactionFactory;
use BraspagApi\Http\Requests\CreditCardRequest;

/**
 *
 */
class CreditCardService extends BaseService
{
    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \BraspagApi\Exceptions\BraspagException
     */
    public function consult(CreditCardRequest $creditCardRequest)
    {
        $this->request = (new CreditCardConsultFactory)->make($creditCardRequest);
        $this->response = $this->client->creditCardConsult($this->request['PaymentId']);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \BraspagApi\Exceptions\BraspagException
     */
    public function transaction(CreditCardRequest $creditCardRequest)
    {
        $this->request = (new CreditCardTransactionFactory)->make($creditCardRequest);
        $this->response = $this->client->creditCardTransaction($this->request);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \BraspagApi\Exceptions\BraspagException
     */
    public function capture(CreditCardRequest $creditCardRequest)
    {
        $this->request = (new CreditCardCaptureFactory)->make($creditCardRequest);
        $this->response = $this->client->creditCardCapture($this->request['PaymentId']);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \BraspagApi\Exceptions\BraspagException
     */
    public function cancellation(CreditCardRequest $creditCardRequest)
    {
        $this->request = (new CreditCardCancellationFactory)->make($creditCardRequest);
        $this->response = $this->client->creditCardCancellation($this->request['PaymentId'], $this->request);
        return $this->response;
    }
}



