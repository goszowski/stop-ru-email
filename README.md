## Stop-ru-email
The extencion of Laravel-validation. Use this if you do not wish to receive emails from Russian domain zones.

## Installation

1. Require this package in your composer.json and run composer update :

		"goszowski/stop-ru-email": "1.*"
    
 2. After composer update, add service providers to the `config/app.php`

	    Goszowski\StopRuEmail\ServiceProvider::class,   
 
 3. Run
 
	    php artisan vendor:publish
      
 ## Use
 By template, in Your controller, use "not_ru_email" rule:
 ```php
$this->validate($request, [
    'email' => 'not_ru_email',
]);
 ```
