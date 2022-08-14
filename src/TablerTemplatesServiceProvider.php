<?php

namespace Skys215\TablerTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TablerTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'tabler-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/tabler-templates/common'),
        ], 'tabler-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/tabler-templates/templates'),
        ], 'tabler-templates');

        Paginator::defaultView('tabler-templates::common.paginator');
        Paginator::defaultSimpleView('tabler-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
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
