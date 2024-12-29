<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::defaultView('pagination::default');

        Relation::morphMap([
            'File' => \App\Models\File::class,
            'RequestDetail' => \App\Models\RequestDetail::class,
            'Retirement' => \App\Models\Retirement::class,
        ]);
    }
}
