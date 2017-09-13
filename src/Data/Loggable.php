<?php

namespace Mcash\Pesa\Data;

/**
 * Logable Trait
 *
 *@category PHP
 *@package  Mcash\Pesa
 *@author   Ayim Domnic <ayimdomnic@gmail.com>
*/
interface Loggable
{
	/**
	 * Get the transaction details and dump
	 *
	 *@param $id
	 *@return mixed
	*/

	public function getTransactionDetails($id);

}
