<?php

namespace Mcash\Mpesa\Data;

/**
 * Loader Interface
 * 
 * @category PHP
 * @package Mcash\Mpesa
 * @author Ayim Domnic <ayimdomnic@gmail.com>
*/ 
interface LoadConfig
{

	/**
	 * Get the configuration value to be stored from the Config
	 * 
	 * @param $key
	 * @param $default
	 * 
	 * @return mixed
	*/ 
	public function get($key, $default = null);

}