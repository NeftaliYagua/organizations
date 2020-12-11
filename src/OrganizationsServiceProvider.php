<?php

namespace LaravelSchema\Organizations;

use Illuminate\Support\ServiceProvider;

class OrganizationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/organizations.php' => config_path('organizations.php'),
        ]);
    }
    public function register()
    {
        
    }
}