<?php

namespace App\Providers;

use App\Models\User;
use App\Contracts\Likeable;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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
        Paginator::defaultView('admin.pagination');
        Paginator::defaultSimpleView('web.pagination');
        Relation::morphMap([
            'blogs' => 'App\Models\Blog',
        //    'videos' => 'App\Models\Videos', // <--- other models may have tags
        ]);
    }
}
