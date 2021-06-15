<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('layouts.header' , function ($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
    }
}