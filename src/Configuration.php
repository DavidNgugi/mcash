<?php

namespace Mcash\Mpesa;

use Mcash\Mpesa\Data\LoadConfig;
use Mcash\Mpesa\Repositories\McashRepository;


/**
 * @category PHP
 * @package  Mcash\Mpesa
 * @author   Ayim Domnic <ayimdomnic@gmail.com>
 */
class Configuration implements LoadConfig
{
	/**
	 * @var McashRepository
	 * 
	*/ 
	private $repository;

	/**
	 * Laravel Configuration Constructor 
	 * @param McashRepossitory $repository
	 * @return mixed
	*/ 
	public function __construct(McashRepository $repository)
	{
		$this->repository = $repository;
	}

	public function get($key, $default = null)
    {
        return $this->repository->get($key, $default);
    }
}