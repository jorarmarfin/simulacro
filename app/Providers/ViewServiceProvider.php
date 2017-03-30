<?php

namespace App\Providers;

use App\Http\ViewComposers\AulasActivasSelectData;
use App\Http\ViewComposers\ControlSelectData;
use App\Http\ViewComposers\RoleSelectData;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['datos.index','datos.edit'],
            ControlSelectData::class
            );
        $this->app->make('view')->composer(
            ['admin.users.index','admin.users.edit','admin.users.delete'],
            RoleSelectData::class
            );
        $this->app->make('view')->composer(
            ['admin.aulas.activas'],
            AulasActivasSelectData::class
            );
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
