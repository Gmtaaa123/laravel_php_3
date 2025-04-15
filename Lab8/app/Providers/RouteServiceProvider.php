<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider as serviceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
