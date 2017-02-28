<?php

namespace LaravelArab\DataSource;

use Illuminate\Config\Repository;
// use Illuminate\Foundation\Application;
// use Illuminate\Http\Request;
// use Illuminate\Routing\Router;
// use Illuminate\Support\Facades\URL;
// use Illuminate\Translation\Translator;
// use Illuminate\View\Factory;
// use Mcamara\LaravelLocalization\Exceptions\SupportedLocalesNotDefined;
// use Mcamara\LaravelLocalization\Exceptions\UnsupportedLocaleException;

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
}