<?php

namespace Braspag;

class Config
{
    CONST BASE_URI_HOMOLOG = "https://apisandbox.braspag.com.br";

    CONST BASE_URI_HOMOLOG_CONSULT = 'https://apiquerysandbox.braspag.com.br/';

    CONST BASE_URI_PROD = "https://api.braspag.com.br/";

    CONST BASE_URI_PROD_CONSULT = 'https://apiquery.braspag.com.br/';

    /**
     * @var $production
     */
    private $production;

    /**
     * @param $production
     */
    function __construct($production)
    {
    	$this->production = $production;

    }

    /**
     * @return array
     */
    private function testTransaction()
    {
    	return [
    	    'url' => self::BASE_URI_HOMOLOG,
            'MerchantId' =>$this->production['MerchantId'],
            'MerchantKey' =>$this->production['MerchantKey']
        ];
    }

    /**
     * @return array
     */
    private function testConsult()
    {
        return [
            'url' => self::BASE_URI_HOMOLOG_CONSULT,
            'MerchantId' =>$this->production['MerchantId'],
            'MerchantKey' =>$this->production['MerchantKey']
        ];
    }

    /**
     * @return array
     */
   	private function prodTransaction()
    {
        return [
            'url' => self::BASE_URI_HOMOLOG,
            'MerchantId' =>$this->production['MerchantId'],
            'MerchantKey' =>$this->production['MerchantKey']
        ];
    }

    /**
     * @return array
     */
    private function prodConsult()
    {
        return [
            'url' => self::BASE_URI_PROD_CONSULT,
            'MerchantId' =>$this->production['MerchantId'],
            'MerchantKey' =>$this->production['MerchantKey']
        ];
    }

    /**
     * @return array|void
     */
    public function currentEnv()
    {

    	if($this->production['production'] == true && $this->production['consult'] == true )
    		return $this->prodConsult();

        if($this->production['production'] == true && $this->production['consult'] == false )
            return $this->prodTransaction();

        if($this->production['production'] == false && $this->production['consult'] == true )
            return $this->testConsult();

        if($this->production['production'] == false && $this->production['consult'] == false )
            return $this->testTransaction();

    }


}