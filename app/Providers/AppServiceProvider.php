<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Wink\WinkPage;

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
        View::share('pages',
            WinkPage::where('slug', '!=', 'inicio')
                ->orderBy('created_at', 'ASC')
                ->get()
        );

        Paginator::useTailwind();
    }
}
