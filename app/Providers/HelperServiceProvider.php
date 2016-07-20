<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Helpers\LogHelper;
use App\Http\Helpers\AssetHelper;
use App\Http\Helpers\StringHelper;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLogHelper();
        $this->registerAssetHelper();
        $this->registerStringHelper();
    }

    private function registerLogHelper() {
        $this->app->singleton('log_helper', function($app) {
            return new LogHelper();
        });
    }

    private function registerAssetHelper() {
        $this->app->singleton('asset_helper', function ($app) {
            return new AssetHelper();
        });
    }

    private function registerStringHelper() {
        $this->app->singleton('string_helper', function ($app) {
            return new StringHelper();
        });
    }
}
