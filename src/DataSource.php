<?php

namespace LaravelArab\DataSource;

use Illuminate\Config\Repository;
use LaravelArab\DataSource\Models\Country;
use LaravelArab\DataSource\Models\State;
use LaravelArab\DataSource\Models\City;

class DataSource
{
    /**
     * Config repository.
     *
     * @var \Illuminate\Config\Repository
     */
    protected $config;
    /**
     * Creates new instance.
     *
     * @throws UnsupportedLocaleException
     */
    public function __construct()
    {
        $this->app = app();
        $this->config = $this->app['config'];
    }
    // Countries
    public function countries(){
        return Country::All();
    }
    public function country($id){
        return Country::find($id);
    }
    public function countryByCode($code){
        return Country::where('code',$code)->first();
    }
    public function countryByName($name){
        return Country::where('name','like',"%".$name."%")->first();
    }
    // States
    public function states(){
        return State::All();
    }
    public function state($id){
        return State::find($id);
    }
    public function stateByName($name){
        return State::where('name','like',"%".$name."%")->first();
    }
    // Cities    
    public function cities(){
        return City::All();
    }
    public function city($id){
        return City::find($id);
    }
    public function cityByName($name){
        return City::where('name','like',"%".$name."%")->first();
    }

}