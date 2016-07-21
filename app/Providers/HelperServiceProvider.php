<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Helpers\LogHelper;
use App\Http\Helpers\AssetHelper;
use App\Http\Helpers\StringHelper;
use App\Http\Helpers\DateTimeHelper;

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
        $this->registerDateTimeHelper();
        $this->registerLogHelper();
        $this->registerAssetHelper();
        $this->registerStringHelper();
    }

    private function registerDateTimeHelper() {
        $this->app->singleton('datetime_helper', function ($app) {
            return new DateTimeHelper();
        });
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
