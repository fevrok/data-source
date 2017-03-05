<?php

namespace LaravelArab\DataSource\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "data_cities";

    public function country(){
		return $this->belongsTo('LaravelArab\DataSource\Models\Country');
	}
	public function state(){
		return $this->belongsTo('LaravelArab\DataSource\Models\State');
	}

}
