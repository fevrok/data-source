<?php

namespace LaravelArab\DataSource\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Config\Repository;

class Country extends Model
{
    protected $table = "data_countries";
    public $currentLocale;

    public function __construct()
    {
        $this->app = app();
        $this->config = $this->app['config'];
        $this->currentLocale = $this->config->get('app.locale');
    }

    public function states() {
		return $this->hasMany('LaravelArab\DataSource\Models\State');
	}
	public function cities() {
		return $this->hasMany('LaravelArab\DataSource\Models\City');
	}
	public function currentLocale() {

	}
	public function getNameAttribute($value) {
	    $name = json_decode($value, true);
	    return $name[$this->currentLocale];
	}
}