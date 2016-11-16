<?php

namespace Cart\Basket\Exceptions;

use Exception;

class QuantityExceededException extends Exception
{
	protected $message = 'Has llegado al limite para este item.';
}