<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use View;
use App\Models\Expediente;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('name', 'id')->toArray();
            $view->with('roleItems', $roleItems);
        });
       View::composer(['users.fields'], function ($view) {
        $expediente = Expediente::pluck('numero', 'id')->toArray();
      $view->with('expediente', $expediente);
       });
        //
    }
}

