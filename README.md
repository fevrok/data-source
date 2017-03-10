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
License
----

MIT


**Free Software, Hell Yeah!**