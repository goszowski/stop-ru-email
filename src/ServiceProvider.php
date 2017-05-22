<?php

namespace Goszowski\StopRuEmail;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

      $this->publishes([
          __DIR__ . '/config.php' => config_path('goszowski/stop-ru-email.php', 'config'),
      ], 'config');

      Validator::extend('not_ru_email', function ($attribute, $value, $parameters, $validator) {
          $templates = Config::get('goszowski.stop-ru-email.templates');
          if(count($templates))
          {
            foreach($templates as $template)
            {
              if(str_is($template, $value))
              {
                return false;
              }
            }
          }

          return true;
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
