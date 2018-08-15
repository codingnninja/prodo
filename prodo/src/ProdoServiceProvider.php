<?php

/*
 * This file is part of the Laravel Prodo package.
 *
 * (c) Ogundiran Ayobami <ayobami_ogundiran@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Codingnninja\Prodo;

use Illuminate\Support\ServiceProvider;

class ProdoServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var boolean
    */
    protected $defer = false;

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('Prodo', function () {

            return new Prodo;

        });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['prodo'];
    }
}
