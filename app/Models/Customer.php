<?php


namespace Cart\Models;

use Cart\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	
	protected $fillable = [

		'email',
		'name'

	];

	public function Orders(){
		return $this->hasMany(Order::class);
	}

}

