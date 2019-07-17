<?php

namespace BinaryTorch\LarecipeFeedback;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::group([
            'namespace'  => 'BinaryTorch\LarecipeFeedback\Http\Controllers',
            'middleware' => config('larecipe.docs.middleware', 'web'),
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
        
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        LaRecipe::script('larecipe-feedback', __DIR__.'/../dist/js/asset.js');
        LaRecipe::style('larecipe-feedback', __DIR__.'/../dist/css/asset.css');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
