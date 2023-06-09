<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Response::macro('success', function ($data = [], $statusCode = 200) {
            return response()->json([
                "ok" => true,
                "data" => $data
            ], $statusCode);
        });

        Response::macro('badRequest', function ($data = [], $statusCode = 400) {
            return response()->json([
                "ok" => false,
                "data" => $data
            ], $statusCode);
        });
        
        Response::macro('notFound', function ($data = [], $statusCode = 404) {
            return response()->json([
                "ok" => false,
                "data" => $data
            ], $statusCode);
        });
    }
}
