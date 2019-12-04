<?php

namespace Modules\SettingPdf\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\SettingPdf\Entities\SettingPdf;
use Modules\SettingPdf\Observers\SettingPdfObserver;

class ObserviceServiceProvider extends ServiceProvider {

    //protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        SettingPdf::observe(SettingPdfObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
