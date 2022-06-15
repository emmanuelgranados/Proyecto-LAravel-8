<?php

namespace App\Providers;

use File;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    // public const HOME = '/dashboar
    protected $namespace = 'App\Http\Controllers';
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        // $this->configureRateLimiting();

        // $this->routes(function () {
        //     Route::middleware('api')
        //         ->prefix('api')
        //         ->group(base_path('routes/api.php'));

        //     Route::middleware('web')
        //         ->group(base_path('routes/web.php'));
        // });

        parent::boot();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            // return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapRoutesByDirectory();

        $this->mapRoutesApiByDirectory();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapRoutesByDirectory()
    {
        Route::group(['namespace' => $this->namespace, 'middleware'=>'web'], function ($router) {
            foreach(File::allFiles(base_path().'/routes/web') as $route) {
                if(preg_match("/^.*Route.php$/", $route->getPathname()))
                    require $route->getPathname();
            }
        });
    }

    protected function mapRoutesApiByDirectory()
    {
        Route::group(['prefix' => 'api', 'middleware'=>'web'], function ($router) {
            foreach(File::allFiles(base_path().'/routes/api') as $route) {
                if(preg_match("/^.*Api.php$/", $route->getPathname()))
                    require $route->getPathname();
            }
        });
    }
}
