<?php 
return [

    /*
     * If set to false, no activities will be saved to the database.
    */
    'enabled' => env('DATA_SOURCE_ENABLED', true),
    /*
    * You can specify the data types you wanna use e.g.
    * array(
    * 	'locations'=>['country','state','city'],
    *  	'categories'=>['country','country''country'],
    *  	'animals'=>['country','country''country']
    * );
    */
    'data_array' => array('locations'=>['country','state','city']);
];