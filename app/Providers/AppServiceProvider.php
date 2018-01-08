<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Form::macro('labelWithHTML', function ($html) {
            echo '<label>'.'<input type="checkbox" name="remember" >'.$html.'</label>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\Eloquents\UserRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CategoryRepositoryInterface',
            'App\Repositories\Eloquents\CategoryRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ReviewRepositoryInterface',
            'App\Repositories\Eloquents\ReviewRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PlaceRepositoryInterface',
            'App\Repositories\Eloquents\PlaceRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ImageRepositoryInterface',
            'App\Repositories\Eloquents\ImageRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CityRepositoryInterface',
            'App\Repositories\Eloquents\CityRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\RateReviewValRepositoryInterface',
            'App\Repositories\Eloquents\RateReviewValRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\RateReviewRepositoryInterface',
            'App\Repositories\Eloquents\RateReviewRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CommentRepositoryInterface',
            'App\Repositories\Eloquents\CommentRepository'
        );
    }
}
