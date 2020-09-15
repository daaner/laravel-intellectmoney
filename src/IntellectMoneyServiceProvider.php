<?php

namespace Daaner\IntellectMoney;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class IntellectMoneyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/intellectmoney.php',
            'comments'
        );

        App::bind('intellectmoney', static function () {
            return new IntellectMoneyClass();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/intellectmoney.php' => config_path('intellectmoney.php'),
        ], 'config');
    }
}
