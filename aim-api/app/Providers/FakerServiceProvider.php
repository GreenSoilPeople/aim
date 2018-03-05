<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFaker();
    }

    protected function registerFaker()
    {
        $this->app->singleton(Generator::class, function () {
            return Factory::create('ro_RO');
        });
    }
}
