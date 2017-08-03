<?php

namespace Mcash\Mpesa\Data;

/**
 * Transactionable Interface
 * 
 * @category PHP
 * @package Mcash\Mpesa
 * @author Ayim Domnic <ayimdomnic@gmail.com>
*/ 
interface Transactable
{
	/**
	 * Generate a Transaction Number for the Payment request
	 * 
	 * @return mixed
	*/ 
	public function generateTransactionNumber();

}