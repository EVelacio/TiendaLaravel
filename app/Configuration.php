<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Configuration extends Model{

	use authenticatable;
	protected $table = 'configurations';

	public function timeInterval()
	{
		return $this->hasOne('App\TimeInterval', 'id', 'time_interval_id');
	}
}
