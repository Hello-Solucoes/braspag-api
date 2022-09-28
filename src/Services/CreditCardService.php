<?php


namespace Braspag\Services;

use Braspag\Braspag;
use Braspag\Config;
use Braspag\Factories\CreditCardCaptureFactory;
use Braspag\Factories\CreditCardCancellationFactory;
use Braspag\Factories\CreditCardConsultFactory;
use Braspag\Factories\CreditCardTransactionFactory;
use Braspag\Http\Requests\CreditCardRequest;

/**
 *
 */
class CreditCardService extends BaseService
{
    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \Braspag\Exceptions\BraspagException
     */
    public function consult(CreditCardRequest $creditCardRequest)
    {
        $this->request = app(CreditCardConsultFactory::class)->make($creditCardRequest);
        $this->response = $this->client->creditCardConsult($this->request['PaymentId']);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \Braspag\Exceptions\BraspagException
     */
    public function transaction(CreditCardRequest $creditCardRequest)
    {
        $this->request = app(CreditCardTransactionFactory::class)->make($creditCardRequest);
        $this->response = $this->client->creditCardTransaction($this->request);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \Braspag\Exceptions\BraspagException
     */
    public function capture(CreditCardRequest $creditCardRequest)
    {
        $this->request = app(CreditCardCaptureFactory::class)->make($creditCardRequest);
        $this->response = $this->client->creditCardCapture($this->request['PaymentId']);
        return $this->response;
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     * @throws \Braspag\Exceptions\BraspagException
     */
    public function cancellation(CreditCardRequest $creditCardRequest)
    {
        $this->request = app(CreditCardCancellationFactory::class)->make($creditCardRequest);
        $this->response = $this->client->creditCardCancellation($this->request['PaymentId'], $this->request);
        return $this->response;
    }
}



