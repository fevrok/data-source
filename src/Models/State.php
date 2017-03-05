<?php

namespace LaravelArab\DataSource\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "data_states";

    public function cities() {
		return $this->hasMany('LaravelArab\DataSource\Models\City');
	}
	public function country(){
		return $this->belongsTo('LaravelArab\DataSource\Models\Country');
	}

}
