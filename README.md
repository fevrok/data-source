About Package
----
This Package will provide every Data a site owner may need in the future :D

Installation
----
the only available way to install DataSource right now is **composer** or you can do it manually like the old way by cloning this repo or downloading it .

```sh
$ composer require laravelarab/data-source
```

Add this line to your `/config/app.php` inside **providers** at the end of array

```php
LaravelArab\DataSource\DataSourceServiceProvider::class,
```
And this to **aliases** array in the same file
```php
'DataSource'   => LaravelArab\DataSource\Facades\DataSource::class,
```
than you can run 
```sh
$ php artisan vendor:publish --tag=config
```

Instructions
----
_**note :**_ The only available data for now is Countries and States and Cities .
```php
DataSource::countries(); // get all countries
DataSource::states(); // get all states
DataSource::cities(); // get all cities

DataSource::country($id); // get country by id
DataSource::country($id)->states; // get country States
DataSource::country($id)->cities; // get county Cities

DataSource::state($id); // get state by id
DataSource::state($id)->country; // get state Country
DataSource::state($id)->cities; // get state Cities

DataSource::city($id); // get city by id
DataSource::city($id)->country; // get city Country
DataSource::city($id)->state; // get city State

DataSource::countryByCode($code); // get Country by code e.g: MA

DataSource::countryByName($name); // get Country by name e.g: Morocco
DataSource::stateByName($name); // get State by name e.g: Tangier-Tetouan
DataSource::cityByName($name); // get City by name e.g: Titwan

// you can access properties name & id & code for example
DataSource::country($id)->id;
DataSource::country($id)->name;
DataSource::country($id)->code;

DataSource::countryByCode($code)->name;
DataSource::countryByName($name)->code;
// you can also do this with state and cities

DataSource::state($id)->id;
DataSource::state($id)->name;
DataSource::state($id)->country_id;

DataSource::city($id)->id;
DataSource::city($id)->name;
DataSource::city($id)->country_id;
DataSource::city($id)->state_id;
```

License
----

MIT


**Free Software, Hell Yeah!**