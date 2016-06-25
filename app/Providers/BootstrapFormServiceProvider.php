<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class BootstrapFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', [
            'name', 'attributes' => [], 'label' => null, 'value' => null
        ]);
        Form::component('bsPassword', 'components.form.password', [
            'name', 'attributes' => [], 'label' => null
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
