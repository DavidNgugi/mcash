<?php


namespace Mcash\Mpesa\Repositories;

use Mcash\Mpesa\Data\LoadConfig;


/**
 * Class McashRepository
 * 
 * @category PHP
 * @package Mcash\Mpesa
 * @author Ayim Domnic <ayimdomnic@gmail.com>
*/
class McashRepository
{
	/**
	 * Sandbox Mode 
	 * 
	 * @var boolean
	*/ 
	public $sandbox;

	/**
	 * Paybill Number
	 * 
	 * @var string 
	*/ 
	public $paybill_number;

	/**
	 * Consumer Key
	 * 
	 * @var string
	*/ 
	public $consumer_key;

	/**
	 * Consumer Secret
	 * 
	 * @var string
	*/ 
	public $consumer_Secret;

	/**
	 * Acess Token
	 * 
	 * @var string
	*/ 
	public $acess_token;

	/**
	 * C2B resource URL
	 * 
	 * @var string
	*/ 
	public $b2cresource_url;

	/**
	 * B2B Resource URL
	 * 
	 * @var string
	*/ 
	public $b2bresource_url;

	/**
	 * C2B resource URL
	 * 
	 * @var string
	*/ 
	public $c2bregister_url;

	/**
	 * C2B resource URL
	 * 
	 * @var string
	*/ 
	public $c2bsimulate_transaction_url;

	/**
	 * Account Ballance URL
	 * 
	 * @var string
	*/ 
	public $account_ballance_url;

	/**
	 * Reversal URL
	 * 
	 * @var string
	*/ 
	public $reversal_url;

	/**
	 * STK Push Query URL
	 * 
	 * @var string
	*/ 
	public $stk_push_query_url;

	/**
	 * STK Push Query URL
	 * 
	 * @var string
	*/ 
	public $stk_push_query_request_url;

	/**
	 * Transaction Status URL
	 * 
	 * @var string
	*/ 
	public $transaction_status_url;

	/**
	 * Check Identity Url
	 * 
	 * @var string
	*/ 
	public $check_identity_url;


	public function __construct(LoadConfig, $loader)
	{
		$this->loader = $loader;
	}

	/**
	 * Boot Up the Instance
	 * 
	*/ 
	public function boot()
	{
		$this->configure();
	}

	/**
	 * Configure the instance and pick values from the config file
	 * 
	*/ 
	public function configure()
	{
		$this->setupDaraja();
		$this->setupPaybill();
		$this->setNumberGenerator();

	}
	/**
	 * SetUp the authentication and callback URLs
	 * 
	 * 
	*/ 
	public function setupDaraja()
	{
		$this->consumer_Secret = $this->loader->get('mcash.consumer_Secret');
		$this->consumer_key = $this->loader->get('mcash.consumer_key');
		$this->sandbox = $this->loader->get('mcash.sandbox');
		$this->acess_token = $this->loader->get('mcash.acess_token');

	}


	public function setupPaybill()
	{
		//code
	}
	
	public function setNumberGenerator()
	{
		//code
	}
}