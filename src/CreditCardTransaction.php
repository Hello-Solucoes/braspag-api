<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionService;

class CreditCardTransaction 
{

    /**
     * @var CreditCardTransactionService
     */
    private $creditCardTransactionService;

    /**
     * @param array $config
     */
	function __construct( array $config )
	{
        $this->config = new Config($config);
		$this->creditCardTransactionService = new CreditCardTransactionService($this->config);

	}

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
	public function make(CreditCardRequest $creditCardRequest)
	{
	    $creditCardTransaction = $this->creditCardTransactionService->run($creditCardRequest);
        return $creditCardTransaction;
	}

	public function log ()
    {
        return $this->creditCardTransactionService->log();
    }

}

